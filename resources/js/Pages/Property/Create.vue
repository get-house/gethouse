<script setup>
import {router, useForm} from '@inertiajs/vue3';
import FileInput from '@/components/FileInput.vue';

import axios from 'axios';
import {computed, ref} from 'vue';

let form = useForm({
    name: null,
    price: null,
    type: null,
    feature: null,
    location: null,
    period_of_availability: null,
    urgency: null,
    description: null,
    photoIds: [],
});

let photo = ref([]);

let uploadMedia = (files) => {
    Array.from(files).forEach((media) => {
        let reader = new FileReader();
        reader.readAsDataURL(media);

        reader.onload = (e) => {
            let item = {
                url: e.target.result,
                id: undefined,
                loading: true,
            };

            let formData = new FormData();
            formData.append('file', media);

            axios
                .post('media', formData)
                .then(({data}) => {
                    item.id = data.id;
                })
                .finally(() => {
                    item.loading = false;
                });

            photo.value.push(item);
        };
    });
};

const removeMedia = (index, item) => {
    photo.value.splice(index, 1);
    //check if item.id exist and delete it
    if (item.id) {
        axios.delete(`media/${item.id}`).catch((error) => {
            console.log(error);

            photo.value.splice(index, 0, item);
        });
    }
};

let submit = () => {
    form.photoIds = photo.value.map((item) => item.id);
    form.post('/properties', form, {
        preserveState: true,
        //set the form to processing on start event
        onStart: () => {
            form.processing = true;
        },
        //set the form to not processing on finish event
        onFinish: () => {
            form.processing = false;
        },
        //check if there is no error on success event and clear the form
        onSuccess: () => {
            console.log('success');
            form.reset();
            photo.value = [];
        },
    });
};

const canSubmit = computed(() => {
    return photo.value.every((item) => !item.loading);
});
</script>

<template>
    <div class="mx-auto py-4 px-4">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Property Profile
                    </h3>
                    <p class="mt-1 text-sm text-gray-600">
                        This information will be displayed publicly so be
                        accurate with what you share.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="submit">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <!-- owner name -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="company-website"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Landlord/Agent Name
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input
                                            type="text"
                                            name="company-website"
                                            id="company-website"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                            :placeholder="
                                                $page.props.auth.user.name
                                            "
                                            disabled
                                        />
                                    </div>
                                </div>
                                <!-- name input -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="company-website"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Property Name
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input
                                            v-model="form.name"
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                            placeholder="3 Bedroom flat"
                                            required
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors"
                                        v-text="form.errors.name"
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                                <!-- price input -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="company-website"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Price
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span
                                            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"
                                        >
                                            &#8358;
                                        </span>
                                        <input
                                            v-model="form.price"
                                            type="number"
                                            name="price"
                                            id="price"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                            placeholder="200,000"
                                            required
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors"
                                        v-text="form.errors.price"
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                                <!-- property type input -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="company-website"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Property type
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input
                                            v-model="form.type"
                                            type="text"
                                            name="type"
                                            id="type"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                            placeholder="flat, bungalow, land, motel, guest inn, ...."
                                            required
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors"
                                        v-text="form.errors.type"
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                                <!-- features -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="company-website"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Property Features
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input
                                            v-model="form.feature"
                                            type="text"
                                            name="feature"
                                            id="feature"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                            placeholder="fully furnished, semi furnished, unfurnished"
                                            required
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors"
                                        v-text="form.errors.feature"
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                                <!-- location input -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="location"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Property Location
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input
                                            v-model="form.location"
                                            type="text"
                                            name="location"
                                            id="location"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                            placeholder="fully furnished, semi furnished, unfurnished"
                                            required
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors"
                                        v-text="form.errors.location"
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                                <!-- period of availability -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="period_of_availability"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Period of availability
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input
                                            v-model="
                                                form.period_of_availability
                                            "
                                            type="number"
                                            name="period_of_availability"
                                            id="period_of_availability"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                            placeholder="fully furnished, semi furnished, unfurnished"
                                            required
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors"
                                        v-text="
                                            form.errors.period_of_availability
                                        "
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                                <!-- urgency input -->
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="urgency"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Property Urgency
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input
                                            v-model="form.urgency"
                                            type="text"
                                            name="urgency"
                                            id="urgency"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                            placeholder="fully furnished, semi furnished, unfurnished"
                                            required
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors"
                                        v-text="form.errors.urgency"
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                            </div>
                            <!-- description input -->

                            <div>
                                <label
                                    for="about"
                                    class="block text-sm font-medium text-gray-700"
                                >
                                    Description
                                </label>
                                <div class="mt-1">
                                    <textarea
                                        v-model="form.description"
                                        id="description"
                                        name="description"
                                        rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md resize-x"
                                        placeholder="this property is a fully furnished 3 bedroom flat with power and water"
                                        required
                                    />
                                    <div
                                        v-if="form.errors"
                                        v-text="form.errors.description"
                                        class="text-red-600 text-xs mt-2"
                                    ></div>
                                </div>
                            </div>
                            <!-- file upload component -->
                            <file-input @input="uploadMedia"></file-input>
                            <!-- check if form.media exist and loop over it -->

                            <div
                                v-if="photo"
                                class="grid grid-flow-col auto-cols-min-1 gap-4"
                            >
                                <div
                                    v-for="(item, index) in photo"
                                    class="relative"
                                >
                                    <button
                                        @click="removeMedia(index, item)"
                                        type="button"
                                        class="m-1 absolute top-0 left-0 rounded-full cursor-pointer text-purple-400 hover:text-purple-600"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                                            />
                                        </svg>
                                    </button>
                                    <img
                                        :src="item.url"
                                        alt="na image dey here"
                                        class="w-full rounded-lg object-cover"
                                    />
                                    <div
                                        v-if="item.loading"
                                        class="animate-bounce bg-white p-1 dark:bg-gray-800 w-6 h-6 ring-1 ring-purple-900/5 dark:ring-gray-200/20 shadow-lg rounded-full flex items-center justify-center"
                                    >
                                        <svg
                                            class="w-6 h-6 text-purple-500"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                d="M19 14l-7 7m0 0l-7-7m7 7V3"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                v-if="!form.processing"
                                type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                :disabled="canSubmit"
                            >
                                Save
                            </button>
                            <button
                                v-else
                                type="button"
                                class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-indigo-500 hover:bg-indigo-400 transition ease-in-out duration-150 cursor-not-allowed"
                                :disabled="form.processing"
                            >
                                <svg
                                    class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <circle
                                        class="opacity-25"
                                        cx="12"
                                        cy="12"
                                        r="10"
                                        stroke="currentColor"
                                        stroke-width="4"
                                    ></circle>
                                    <path
                                        class="opacity-75"
                                        fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                    ></path>
                                </svg>
                                Processing...
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>


<style scoped></style>
