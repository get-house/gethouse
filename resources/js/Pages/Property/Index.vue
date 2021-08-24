<template>
    <div>
        <div
            class="
                mx-4
                my-4
                grid grid-cols-1
                xs:grid-cols-2
                md:grid-cols-3
                justify-center
                items-center
                gap-4
                animated
                fadeIn
                faster
                outline-none
                focus:outline-none
            "
        >
            <!-- bigining of first card -->
            <div
                v-for="property in properties"
                :key="property.id"
                class="w-[350px] bg-white/40 backdrop-blur-md shadow rounded-xl"
            >
                <div class="flex flex-col justify-center items-center">
                    <img
                        :src="property.images"
                        alt="Just a flower"
                        class="object-cover w-full h-[300px] rounded-t-lg"
                    />
                    <div class="flex-wrap">
                        <div class="">
                            <h2 class="flex-auto text-lg font-medium">
                                hello world
                            </h2>
                        </div>
                        <div class="flex py-4 text-sm text-gray-500">
                            <div class="flex-1 inline-flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-3 text-gray-400"
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
                                <p class="">Kaduna</p>
                            </div>
                            <div class="flex-1 inline-flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2 text-gray-400"
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
                                <p class="">$2000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of one card -->
        </div>
        <!-- small caurosel cards ends here -->
    </div>
</template>

<script>
import GuestLayout from '@/Layouts/Guest';
export default {
    layout: GuestLayout,
    name: 'Index',
    props: {
        properties: {
            type: Object,
        },
    },
};
</script>

<style scoped></style>
