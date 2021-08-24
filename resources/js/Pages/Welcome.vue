<template>
    <!-- lets go there -->
    <div>
        <!-- hero section -->
        <hero
            :platinumProperties="platinumProperties"
            :goldProperties="goldProperties"
        />
        <!-- features section -->
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2
                        class="
                            text-base text-indigo-600
                            font-bold
                            tracking-wide
                            uppercase
                        "
                    >
                        Features
                    </h2>
                    <p
                        class="
                            mt-2
                            text-3xl
                            leading-8
                            font-extrabold
                            tracking-tight
                            text-gray-900
                            sm:text-4xl
                        "
                    >
                        A better way to buy/rent properties
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Lorem ipsum dolor sit amet consect adipisicing elit.
                        Possimus magnam voluptatum cupiditate veritatis in
                        accusamus quisquam.
                    </p>
                </div>

                <div class="mt-10">
                    <dl
                        class="
                            space-y-10
                            md:space-y-0
                            md:grid
                            md:grid-cols-2
                            md:gap-x-8
                            md:gap-y-10
                        "
                    >
                        <div
                            v-for="feature in features"
                            :key="feature.name"
                            class="relative"
                        >
                            <dt>
                                <div
                                    class="
                                        absolute
                                        flex
                                        items-center
                                        justify-center
                                        h-12
                                        w-12
                                        rounded-md
                                        bg-indigo-500
                                        text-white
                                    "
                                >
                                    <component
                                        :is="feature.icon"
                                        class="h-6 w-6"
                                        aria-hidden="true"
                                    />
                                </div>
                                <p
                                    class="
                                        ml-16
                                        text-lg
                                        leading-6
                                        font-medium
                                        text-gray-900
                                    "
                                >
                                    {{ feature.name }}
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                {{ feature.description }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        <!-- featured properties section -->
        <div
            class="
                grid grid-cols-1
                sm:grid-cols-2 sm:px-8 sm:py-12 sm:gap-x-8
                md:py-16
            "
        >
            <div
                class="
                    relative
                    z-10
                    col-start-1
                    row-start-1
                    px-4
                    pt-40
                    pb-3
                    bg-gradient-to-t
                    from-black
                    sm:bg-none
                "
            >
                <p
                    class="
                        text-sm
                        font-medium
                        text-white
                        sm:mb-1 sm:text-gray-500
                    "
                >
                    Entire house
                </p>
                <h2
                    class="
                        text-xl
                        font-semibold
                        text-white
                        sm:text-2xl sm:leading-7 sm:text-black
                        md:text-3xl
                    "
                >
                    Beach House in Collingwood
                </h2>
            </div>
            <div class="col-start-1 row-start-2 px-4 sm:pb-16">
                <div
                    class="
                        flex
                        items-center
                        text-sm
                        font-medium
                        my-5
                        sm:mt-2 sm:mb-4
                    "
                >
                    <svg
                        width="20"
                        height="20"
                        fill="currentColor"
                        class="text-violet-600"
                    >
                        <path
                            d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z"
                        />
                    </svg>
                    <div class="ml-1">
                        <span class="text-black">4.94</span>
                        <span class="sm:hidden md:inline">(128)</span>
                    </div>
                    <div class="text-base font-normal mx-2">·</div>
                    <div>Collingwood, Ontario</div>
                </div>
                <hr class="w-16 border-gray-300 hidden sm:block" />
            </div>
            <div class="col-start-1 row-start-3 space-y-3 px-4">
                <p class="flex items-center text-black text-sm font-medium">
                    <img
                        src="/images/hero_house.jpg"
                        alt=""
                        class="w-6 h-6 rounded-full mr-2 bg-gray-100"
                    />
                    Owned by Kevin Francis
                </p>
                <button
                    type="button"
                    class="
                        bg-violet-100
                        text-violet-700 text-base
                        font-semibold
                        px-6
                        py-2
                        rounded-lg
                    "
                >
                    Check availability
                </button>
            </div>
            <div
                class="
                    col-start-1
                    row-start-1
                    flex
                    sm:col-start-2 sm:row-span-3
                "
            >
                <div class="w-full grid grid-cols-3 grid-rows-2 gap-2">
                    <div class="relative col-span-3 row-span-2 md:col-span-2">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="
                                absolute
                                inset-0
                                w-full
                                h-full
                                object-cover
                                bg-gray-100
                                sm:rounded-lg
                            "
                        />
                    </div>
                    <div class="relative hidden md:block">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="
                                absolute
                                inset-0
                                w-full
                                h-full
                                object-cover
                                rounded-lg
                                bg-gray-100
                            "
                        />
                    </div>
                    <div class="relative hidden md:block">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="
                                absolute
                                inset-0
                                w-full
                                h-full
                                object-cover
                                rounded-lg
                                bg-gray-100
                            "
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>

<script>
import GuestLayout from '@/Layouts/Guest';
import Hero from '@/Components/Hero';
import {
    AnnotationIcon,
    GlobeAltIcon,
    LightningBoltIcon,
    ScaleIcon,
} from '@heroicons/vue/outline';

const features = [
    {
        name: 'Extensive property reach',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: GlobeAltIcon,
    },
    {
        name: 'No hidden fees',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: ScaleIcon,
    },
    {
        name: 'Real time availability',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: LightningBoltIcon,
    },
    {
        name: 'Mobile notifications',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: AnnotationIcon,
    },
];

export default {
    layout: GuestLayout,
    components: {
        AnnotationIcon,
        GlobeAltIcon,
        LightningBoltIcon,
        ScaleIcon,
        Hero,
    },

    props: {
        auth: Object,
        platinumProperties: Object,

        goldProperties: Object,

        canLogin: Boolean,
        canRegister: Boolean,
        errors: Object,
        laravelVersion: String,
        phpVersion: String,
    },

    setup(props) {
        return {
            features,
        };
    },
};
</script>
