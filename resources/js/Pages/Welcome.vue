<template>
    <!-- lets go there -->
    <div>
        <!-- hero section -->
        <div
            class="
            min-h-screen
            grid
            justify-items-center
            lg:grid-cols-5
            sm:grid-cols-1
        "
        >
            <div class="place-self-center col-span-3">
                <h1 class="text-6xl font-bold leading-tight">
                    Find
                    <span class="text-indigo-700">Perfect</span>
                    Place <br />
                    To Live Life.
                </h1>
                <div class="flex-auto flex space-x-4 mt-12 mb-4">
                    <button
                        class="
                        px-6
                        flex
                        items-center
                        justify-center
                        bg-white
                        rounded-full
                        text-lg
                        shadow-
                        hover:bg-indigo-700 hover:text-white
                    "
                    >
                        Buy
                    </button>
                    <button
                        class="
                        px-6
                        flex
                        items-center
                        justify-center
                        bg-white
                        rounded-full
                        text-lg
                        shadow-sm
                        hover:shadow-md hover:bg-indigo-700 hover:text-white
                    "
                    >
                        Sell
                    </button>
                    <button
                        class="
                        px-6
                        flex
                        items-center
                        justify-center
                        bg-white
                        rounded-full
                        text-lg
                        shadow-sm
                        hover:shadow-md hover:bg-indigo-700 hover:text-white
                    "
                    >
                        Rent
                    </button>
                    <button
                        class="
                        px-6
                        flex
                        items-center
                        justify-center
                        bg-white
                        rounded-full
                        text-lg
                        shadow-sm
                        hover:shadow-md hover:bg-indigo-700 hover:text-white
                    "
                    >
                        Manage
                    </button>
                </div>
                <!-- filter and search design -->
                <div class="bg-white rounded-full my-4 h-14 flex gap-10 shadow">
                    <div class="flex flex-col px-4">
                        <label class="text-xs">city/street</label>
                        <select
                            class="
                            rounded-lg
                            focus:outline-none focus:ring
                            text-sm
                            font-semibold
                        "
                        >
                            <option value="">Street1</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-xs">Property type</label>
                        <select
                            class="
                            rounded-lg
                            focus:outline-none focus:ring
                            text-sm
                            font-semibold
                        "
                        >
                            <option value="">Duplex</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-xs">Price range</label>
                        <select
                            class="
                            rounded-lg
                            focus:outline-none focus:ring
                            text-sm
                            font-semibold
                        "
                        >
                            <option value="">2000</option>
                        </select>
                    </div>
                    <input
                        type="search"
                        name="search"
                        id="search"
                        placeholder="search property"
                        class="
                        rounded-r-full
                        text-right
                        bg-indigo-500
                        text-white
                        placeholder-white
                        pr-2
                        focus:outline-none focus:ring
                    "
                    />
                </div>
                <!-- small caurosel cards starts here -->
                <div
                    class="
                    flex
                    justify-center
                    items-center
                    space-x-4
                    max-h-72
                    animated
                    fadeIn
                    faster
                    outline-none
                    focus:outline-none
                "
                >
                    <!-- bigining of first card -->
                    <div v-for="goldProperty in goldProperties" :key="goldProperty.id" class="w-48 bg-white shadow rounded-xl">
                        <div  class="flex flex-col justify-center items-center">
                            <img
                                :src="goldProperty.images"
                                alt="Just a flower"
                                class="object-cover h-36 w-48 rounded-t-lg"
                            />
                            <div class="flex-wrap">
                                <div class="">
                                    <h2 class="flex-auto text-lg font-medium">
                                        {{ goldProperty.name }}
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
                                        <p class="">${{ goldProperty.price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of one card -->

                </div>
                <!-- small caurosel cards ends here -->
            </div>
            <!-- grid component -->
            <div
                class="
                col-span-2
                animated
                fadeIn
                faster
                flex
                justify-center
                items-center
                inset-0
                z-0
                outline-none
                focus:outline-none
            "
            >
                <div class="flex flex-col items-center justify-center">
                    <div
                        class="max-w-md w-full bg-gray-200 shadow-lg rounded-xl p-2"
                    >
                        <div v-for="platinumProperty in platinumProperties" :key="platinumProperty.id" class="flex flex-col">
                            <div class="relative w-full mb-3">
                                <div
                                    class="absolute flex flex-col top-0 right-0 p-3"
                                >
                                    <button
                                        class="
                                        transition
                                        ease-in
                                        duration-300
                                        bg-gray-800
                                        hover:text-purple-500
                                        shadow
                                        hover:shadow-md
                                        text-gray-500
                                        rounded-full
                                        w-8
                                        h-8
                                        text-center
                                        p-1
                                    "
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
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                            ></path>
                                        </svg>
                                    </button>
                                </div>
                                <img
                                    :src="platinumProperty.images"
                                    alt="Just a flower"
                                    class="max-h-72 w-full object-fill rounded-2xl"
                                />
                            </div>
                            <div class="flex-auto justify-evenly">
                                <div class="flex flex-wrap">
                                    <div
                                        class="
                                        w-full
                                        flex-none
                                        text-sm
                                        flex
                                        items-center
                                        text-gray-600
                                    "
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-red-500 mr-1"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            ></path>
                                        </svg>
                                        <span
                                            class="
                                            text-gray-400
                                            whitespace-nowrap
                                            mr-3
                                        "
                                        >{{ platinumProperty.landlord.rating }}</span
                                        ><span class="mr-2 text-gray-400"
                                    >{{ platinumProperty.location }}</span
                                    >
                                    </div>
                                    <div
                                        class="
                                        flex
                                        items-center
                                        w-full
                                        justify-between
                                        min-w-0
                                    "
                                    >
                                        <h2
                                            class="
                                            text-lg
                                            mr-auto
                                            cursor-pointer
                                            text-gray-600
                                            truncate
                                        "
                                        >
                                            {{
                                                platinumProperty.name
                                            }}
                                        </h2>
                                        <div
                                            class="
                                            flex
                                            items-center
                                            bg-green-400
                                            text-white text-xs
                                            px-2
                                            py-1
                                            ml-3
                                            rounded-lg
                                        "
                                        >
                                            AVAILABLE
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-10 mb-3">
                                    <div
                                        class="
                                        text-xl text-gray-500
                                        font-semibold
                                        mt-1
                                    "
                                    >
                                        ${{ platinumProperty.price }}
                                    </div>
                                    <div
                                        class="
                                        hover:text-yellow-500
                                        cursor-pointer
                                        p-1
                                        py-0
                                    "
                                    >
                                        {{ platinumProperty.type }}
                                    </div>
                                </div>
                                <div
                                    class="
                                    flex
                                    space-x-2
                                    text-sm
                                    font-medium
                                    justify-start
                                "
                                >
                                    <button
                                        class="
                                        transition
                                        ease-in
                                        duration-300
                                        inline-flex
                                        items-center
                                        text-sm
                                        font-medium
                                        mb-2
                                        md:mb-0
                                        bg-indigo-500
                                        px-5
                                        py-2
                                        hover:shadow-lg
                                        tracking-wider
                                        text-white
                                        rounded-full
                                        hover:bg-indigo-600
                                    "
                                    >
                                        <span>Enquire </span>
                                    </button>
                                    <button
                                        class="
                                        transition
                                        ease-in
                                        duration-300
                                        bg-gray-700
                                        hover:bg-gray-800
                                        border
                                        hover:border-gray-500
                                        border-gray-700
                                        hover:text-white hover:shadow-lg
                                        text-gray-400
                                        rounded-full
                                        w-9
                                        h-9
                                        text-center
                                        p-2
                                    "
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class=""
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                            ></path>
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                            ></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    components:{
        AnnotationIcon,
        GlobeAltIcon,
        LightningBoltIcon,
        ScaleIcon
    },

    props: {
        auth: Object,
        platinumProperties: {
            type:Object
        },
        goldProperties: {
            type:Object
        },
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
