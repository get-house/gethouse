<template>
    <!-- <div
        class="
            relative
            flex
            items-top
            justify-center
            min-h-screen
            bg-gray-100
            dark:bg-gray-900
            sm:items-center sm:pt-0
        "
    >
        <div
            v-if="canLogin"
            class="hidden fixed top-0 right-0 px-6 py-4 sm:block"
        >
            <inertia-link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sm text-gray-700 underline"
            >
                Dashboard
            </inertia-link>

            <template v-else>
                <inertia-link
                    :href="route('login')"
                    class="text-sm text-gray-700 underline"
                >
                    Log in
                </inertia-link>

                <inertia-link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 text-sm text-gray-700 underline"
                >
                    Register
                </inertia-link>
            </template>
        </div>
    </div> -->

    <!-- lets go there -->
    <div>
        <!-- hero section -->
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div
                    class="
                        relative
                        z-10
                        pb-8
                        bg-white
                        sm:pb-16
                        md:pb-20
                        lg:max-w-2xl lg:w-full lg:pb-28
                        xl:pb-32
                    "
                >
                    <svg
                        class="
                            hidden
                            lg:block
                            absolute
                            right-0
                            inset-y-0
                            h-full
                            w-48
                            text-white
                            transform
                            translate-x-1/2
                        "
                        fill="currentColor"
                        viewBox="0 0 100 100"
                        preserveAspectRatio="none"
                        aria-hidden="true"
                    >
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>

                    <main
                        class="
                            mt-2
                            mx-auto
                            max-w-7xl
                            px-4
                            sm:mt-12 sm:px-6
                            md:mt-16
                            lg:mt-20 lg:px-8
                            xl:mt-28
                        "
                    >
                        <div class="sm:text-center lg:text-left">
                            <h1
                                class="
                                    text-4xl
                                    tracking-tight
                                    font-extrabold
                                    text-gray-900
                                    sm:text-5xl
                                    md:text-6xl
                                "
                            >
                                <span class="block xl:inline"
                                    >Properties to enrich your</span
                                >
                                {{ " " }}
                                <span class="block text-indigo-600 xl:inline"
                                    >daily living</span
                                >
                            </h1>
                            <p
                                class="
                                    mt-3
                                    text-base text-gray-500
                                    sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto
                                    md:mt-5 md:text-xl
                                    lg:mx-0
                                "
                            >
                                Anim aute id magna aliqua ad ad non deserunt
                                sunt. Qui irure qui lorem cupidatat commodo.
                                Elit sunt amet fugiat veniam occaecat fugiat
                                aliqua.
                            </p>
                            <div
                                class="
                                    mt-5
                                    sm:mt-8 sm:flex sm:justify-center
                                    lg:justify-start
                                "
                            >
                                <div class="rounded-md shadow">
                                    <a
                                        href="#"
                                        class="
                                            w-full
                                            flex
                                            items-center
                                            justify-center
                                            px-8
                                            py-3
                                            border border-transparent
                                            text-base
                                            font-medium
                                            rounded-md
                                            text-white
                                            bg-indigo-600
                                            hover:bg-indigo-700
                                            md:py-4 md:text-lg md:px-10
                                        "
                                    >
                                        Get started
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a
                                        href="#"
                                        class="
                                            w-full
                                            flex
                                            items-center
                                            justify-center
                                            px-8
                                            py-3
                                            border border-transparent
                                            text-base
                                            font-medium
                                            rounded-md
                                            text-indigo-700
                                            bg-indigo-100
                                            hover:bg-indigo-200
                                            md:py-4 md:text-lg md:px-10
                                        "
                                    >
                                        Live demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img
                    class="
                        h-56
                        w-full
                        object-cover
                        sm:h-72
                        md:h-96
                        lg:w-full lg:h-full
                    "
                    src="/images/hero_house.jpg"
                    alt=""
                />
            </div>
        </div>
        <!-- features section -->
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2
                        class="
                            text-base text-indigo-600
                            font-bold
                            tracking-wide
                            text-lg
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
    </div>
</template>

<style scoped></style>

<script>
import GuestLayout from "@/Layouts/Guest";
import {
    AnnotationIcon,
    GlobeAltIcon,
    LightningBoltIcon,
    ScaleIcon,
} from "@heroicons/vue/outline";

const features = [
    {
        name: "Extensive property reach",
        description:
            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
        icon: GlobeAltIcon,
    },
    {
        name: "No hidden fees",
        description:
            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
        icon: ScaleIcon,
    },
    {
        name: "Real time availability",
        description:
            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
        icon: LightningBoltIcon,
    },
    {
        name: "Mobile notifications",
        description:
            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
        icon: AnnotationIcon,
    },
];

export default {
    layout: GuestLayout,

    props: {
        auth: Object,
        properties: Array,
        canLogin: Boolean,
        canRegister: Boolean,
        errors: Object,
        laravelVersion: String,
        phpVersion: String,
    },

    setup() {
        return {
            features,
        };
    },
};
</script>
