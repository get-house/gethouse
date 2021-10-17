<template>
    <div >
        <div
            class="
                grid grid-cols-1
                xs:grid-cols-2
                md:grid-cols-3
                justify-items-center
                items-center
                gap-y-6
                animated
                fadeIn
                faster
                outline-none
                focus:outline-none
            "
        >
            <!-- bigining of first card -->
            <div
                v-for="property in properties.data"
                :key="property.id"
                class="
                    w-[380px]
                    my-4
                    bg-white/40
                    backdrop-blur-md
                    shadow
                    rounded-xl
                "
            >
                <Link :href="route('property.show', property.id)">
                    <div class="flex flex-col justify-center text-center">
                        <div class="relative">
                            <LikeComponent></LikeComponent>
                            <div
                                v-show="property.isVerified"
                                class="absolute top-0 left-0 p-3"
                            >
                                <button
                                    class="
                                        transition
                                        ease-in
                                        duration-300
                                        hover:text-green-600
                                        shadow
                                        hover:shadow-md
                                        text-green-800
                                        rounded-full
                                        w-6
                                        h-6
                                        text-center
                                    "
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

                            <img
                                src="/images/hero_house.jpg"
                                alt="Just a flower"
                                class="object-cover w-full h-[300px] rounded-t-lg"
                            />
                            <div
                                class="
                                    absolute
                                    bottom-0
                                    pb-2
                                    opacity-0
                                    hover:opacity-100
                                    bg-white/60
                                    backdrop-blur-xl
                                    transition
                                    duration-700
                                    ease-in-out
                                "
                            >
                                <p
                                    class="
                                        text-gray-900
                                        mt-2
                                        pt-2
                                        transition
                                        transform
                                        hover:-translate-y-2
                                        duration-1000
                                        ease-in-out
                                        z-10
                                    "
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
                                        property.landlord.user.name.substr(0, 6)
                                    }}</a>
                                </h4>
                            </div>
                            <div
                                class="
                                    grid grid-cols-3
                                    justify-items-center
                                    items-center
                                "
                            >
                                <div
                                    class="
                                        flex flex-col
                                        justify-center
                                        items-center
                                        space-y-1
                                        mb-2
                                    "
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
                                        class="
                                            bg-blue-500
                                            text-white
                                            rounded-lg
                                            shadow
                                            px-2
                                        "
                                    >
                                        {{ property.location.substring(0, 10) }}
                                    </p>
                                </div>
                                <div class="text-gray-500">
                                    Type:<span
                                        class="
                                            bg-blue-400
                                            rounded-full
                                            shadow
                                            text-white
                                            ml-1
                                            p-1
                                        "
                                    >
                                        {{ property.type.substring(0, 6) }}</span
                                    >
                                </div>
                                <div
                                    class="
                                        flex flex-col
                                        justify-center
                                        items-center
                                    "
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
                                        $
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
            </div>
            <!-- end of one card -->
        </div>
        <!-- small caurosel cards ends here -->
    </div>
</template>

<script>
import GuestLayout from '@/Layouts/Guest';
import LikeComponent from '@/Components/Like';
import { Link } from "@inertiajs/inertia-vue3";

export default {
    layout: GuestLayout,
    components: {
        LikeComponent,
        Link
    },
    name: 'Index',
    props: {
        properties: {
            type: Object,
        },
    },
};
</script>

<style scoped></style>
