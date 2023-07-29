<script setup>
import GuestLayout from '@/Layouts/Guest.vue';
import Like from '@/Components/Like.vue';
import Toast from '@/Components/Toast.vue';
import Search from '@/Components/Search.vue';
import {router} from '@inertiajs/vue3';
import {computed, ref, onMounted, onUnmounted, watch} from 'vue';
import {usePage} from '@inertiajs/vue3';

let props = defineProps({
    properties: Object,
    filters: Object,
});

//create a allProperties ref
let allProperties = ref(props.properties.data);
let isLoadingMore = ref(false);
const initialUrl = computed(() => {
    return props.properties.path;
});

let search = ref(props.filters.search);

// create a watcher for search

watch(search, value => {
    router.get(
        props.properties.path,
        {
            search: value,
        },
        {
            preserveState: true,
            preserveScroll: true,
            onSuccess: () => {
                allProperties.value = props.properties.data;
                const {title} = usePage();
                window.history.replaceState({}, title, initialUrl.value);
            },
        }
    );
});

//We now need a method that will allow us to load the next page of properties based on the next_page_url property returned from Laravel's pagination object.
function loadMoreProperties() {
    if (window.location.pathname !== '/properties') {
        return;
    }
    if (props.properties.next_page_url !== null) {
        router.get(
            props.properties.next_page_url,
            {},
            {
                preserveState: true,
                preserveScroll: true,
                onSuccess: () => {
                    allProperties.value = [
                        ...allProperties.value,
                        ...props.properties.data,
                    ];
                    const {title} = usePage();
                    window.history.replaceState({}, title, initialUrl.value);
                },
            }
        );
    }
}

onMounted(() => {
    //calculate when the user scrolls to the bottom of the page and load more properties by calling the loadMoreProperties method
    if (window.location.pathname === '/properties') {
        window.addEventListener('scroll', handleScroll);
    }
});

//use onUnmounted to remove the scroll event listener and stop loading more properties
onUnmounted(() => {
    if (window.location.pathname === '/properties') {
        window.removeEventListener('scroll', handleScroll);
    }
});
const handleScroll = () => {
    const {innerHeight} = window;
    const {scrollHeight} = document.body;
    const scrollTop =
        (document.documentElement && document.documentElement.scrollTop) ||
        document.body.scrollTop;

    const scrolledToBottom = Math.ceil(scrollTop + innerHeight) >= scrollHeight;

    if (scrolledToBottom) {
        loadMoreProperties();
        console.log('loading more properties');
    }
};


</script>

<template>
    <Head title="properties"></Head>

    <GuestLayout>
        <div class="flex justify-between mx-2 sm:mx-10 pt-2">
            <h1 class="text-2xl">Properties</h1>
            <toast></toast>
            <div class="max-w-[50rem] z-50">
                <Search/>
            </div>
            <input
                v-model="search"
                type="text"
                placeholder="Search"
                class="border px-2 rounded-lg"
                id="search"
            />
        </div>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-items-center items-center gap-x-4 gap-y-6 animated fadeIn faster outline-none focus:outline-none"
        >
            <!-- beginning of first card -->
            <div
                v-for="property in allProperties"
                :key="property.id"
                class="w-[21rem] sm:w-[22rem] lg:w-[24rem] my-4 bg-white/40 backdrop-blur-md shadow rounded-xl"
            >
                <Link :href="route('properties.show', property.id)">
                    <div class="flex flex-col justify-center text-center">
                        <div class="relative">
                            <Like/>
                            <div
                                v-show="property.isVerified"
                                class="absolute top-0 left-0 p-3"
                            >
                                <button
                                    v-tooltip.bottom-end="{
                                        content: 'This property is verified',
                                        html: true,
                                    }"
                                    class="transition ease-in duration-300 hover:text-green-600 shadow hover:shadow-md text-green-800 rounded-full w-6 h-6 text-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </button>
                            </div>

                            <div v-if="property.media.length">
                                <img
                                    :src="property.media[0].full_url"
                                    class="object-cover w-full h-[300px] rounded-t-lg"
                                />
                            </div>
                            <img
                                v-else
                                src="/images/hero_house.jpg"
                                alt="Just a flower"
                                class="object-cover w-full h-[300px] rounded-t-lg"
                            />
                            <div
                                class="absolute bottom-0 pb-2 opacity-0 hover:opacity-100 bg-white/60 backdrop-blur-xl transition duration-700 ease-in-out"
                            >
                                <p
                                    class="text-gray-900 mt-2 pt-2 transition transform hover:-translate-y-2 duration-1000 ease-in-out z-10"
                                >
                                    {{ property.description }}
                                </p>
                            </div>
                        </div>
                        <div class="flex-wrap">
                            <div class="grid grid-cols-2 gap-y-6">
                                <h2 class="font-medium text-gray-600">
                                    {{ property.name }}
                                </h2>
                                <h4 class="text-gray-600">
                                    owned by:
                                    <a href="#" class="text-purple-500">{{
                                            property.landlord.user.name.slice(0, 6)
                                        }}</a>
                                </h4>
                            </div>
                            <div
                                class="grid grid-cols-3 justify-items-center items-center"
                            >
                                <div
                                    class="flex flex-col justify-center items-center space-y-1 mb-2"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-7 text-yellow-600"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                        ></path>
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                        ></path>
                                    </svg>
                                    <p
                                        class="bg-blue-500 text-white rounded-lg shadow px-2"
                                    >
                                        {{ property.address.substring(0, 10) }}
                                    </p>
                                </div>
                                <div class="text-gray-500">
                                    Type:<span
                                    class="bg-blue-400 rounded-full shadow text-white ml-1 p-1"
                                >
                                        {{
                                        property.type.substring(0, 6)
                                    }}</span
                                >
                                </div>
                                <div
                                    class="flex flex-col justify-center items-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-red-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                    <p class="text-gray-600">
                                        &#8358;
                                        <span
                                            class="text-green-500 font-semibold"
                                        >{{ property.price }}</span
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </Link>
                <!-- <div v-if="property.media.length">
                <div v-for="(item, index) in property.media">
                    <img :src="item.full_url" alt="" />
                </div>
            </div> -->
            </div>
            <!-- end of one card -->
        </div>
    </GuestLayout>

    <!-- small caurosel cards ends here -->
</template>

<style scoped>
body {
    background-color: #dfdbe5;
//background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%239C92AC' fill-opacity='0.4' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
}
</style>
