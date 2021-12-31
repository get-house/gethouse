<template>
    <Head title="property" />
    <div class="pt-6 grid grid-cols-1 md:grid-cols-4 justify-items-center">
        <div class="md:col-span-3 mx-10">
            <div class="example flex overflow-hidden">
                <img
                    id="slider-1"
                    src="/images/hero_house.jpg"
                    alt="house"
                    class="object-cover flex-shrink-0 w-full rounded"
                />

                <img
                    id="slider-2"
                    src="/images/hero_house.jpg"
                    alt=""
                    class="object-cover flex-shrink-0 w-full rounded"
                />

                <img
                    id="slider-3"
                    src="/images/hero_house.jpg"
                    alt=""
                    class="object-cover flex-shrink-0 w-full rounded"
                />

                <img
                    id="slider-4"
                    src="/images/hero_house.jpg"
                    alt=""
                    class="object-cover flex-shrink-0 w-full rounded"
                />

                <img
                    id="slider-5"
                    src="/images/hero_house.jpg"
                    alt=""
                    class="object-cover flex-shrink-0 w-full rounded"
                />

                <img
                    id="slider-6"
                    src="/images/hero_house.jpg"
                    alt=""
                    class="object-cover flex-shrink-0 w-full rounded"
                />

                <img
                    id="slider-7"
                    src="/images/hero_house.jpg"
                    alt=""
                    class="object-cover flex-shrink-0 w-full rounded"
                />

                <img
                    id="slider-8"
                    src="/images/hero_house.jpg"
                    alt=""
                    class="object-cover flex-shrink-0 w-full rounded"
                />
            </div>
            <div
                class="example flex justify-center space-x-4 my-8 overflow-x-scroll overscroll-x-contain"
            >
                <Link href="#slider-1" preserveScroll>
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>

                <Link href="#slider-2">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>

                <Link href="#slider-3">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>

                <Link href="#slider-4">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>

                <Link href="#slider-5">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>

                <Link href="#slider-6">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>

                <Link href="#slider-7">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>

                <Link href="#slider-8">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-40 rounded"
                    />
                </Link>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 justify-items-start my-4"
            >
                <div class="flex space-x-4">
                    <p class="text-slate-500">property verified</p>
                    <span>
                        <BadgeCheckIcon class="w-6 h-6 text-indigo-500" />
                    </span>
                    <span>
                        <XCircleIcon class="w-6 h-6 text-rose-500" />
                    </span>
                </div>
                <div class="justify-self-end flex space-x-3">
                    <p>add to favourite</p>
                    <button type="button">
                        <HeartIcon
                            class="w-6 h-6 text-indigo-300 hover:text-indigo-500"
                        />
                    </button>

                    <p>share</p>
                    <span>
                        <ShareIcon
                            class="w-6 h-6 text-indigo-300 hover:text-indigo-500"
                        />
                    </span>
                </div>
            </div>
            <h2 class="text-gray-800 text-xl font-semibold my-4">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis
                velit unde incidunt hic id. Ipsa, quod.
            </h2>
            <p class="flex space-x-2 my-4 text-slate-500">
                karuma, abuja
                <span>
                    <LocationMarkerIcon class="w-6 h-6 text-indigo-400" />
                </span>
            </p>
        </div>
        <div class="md:col-span-1 bg-gray-400 px-2">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                aut quibusdam reiciendis debitis rem rerum impedit dignissimos
                placeat consequuntur facilis ex, atque corrupti quasi aperiam
                non, necessitatibus magnam est obcaecati.
            </div>
        </div>
    </div>
</template>

<script setup>
import {
    BadgeCheckIcon,
    XCircleIcon,
    HeartIcon,
    ShareIcon,
} from '@heroicons/vue/solid';

import { LocationMarkerIcon } from '@heroicons/vue/solid';

defineProps: ({
    property: Object,
});
</script>
<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
</style>
