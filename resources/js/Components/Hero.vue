<template>
    <body>
        <div
            class="grid justify-items-center lg:grid-cols-5 sm:grid-cols-1 pb-4"
        >
            <div class="place-self-center col-span-3">
                <h1 class="text-6xl font-bold leading-tight">
                    Find
                    <span class="text-indigo-700">Perfect</span>
                    Place <br />
                    To Live Life.
                </h1>
                <div class="hidden sm:flex sm:flex-auto space-x-4 mt-10 mb-4">
                    <button
                        class="px-6 flex items-center justify-center bg-white/10 backdrop-blur-md rounded-full text-lg shadow-md hover:shadow-md hover:bg-indigo-700 hover:text-white"
                    >
                        Buy
                    </button>
                    <button
                        class="px-6 flex items-center justify-center bg-white/10 backdrop-blur-md rounded-full text-lg shadow-md hover:shadow-md hover:bg-indigo-700 hover:text-white"
                    >
                        Sell
                    </button>
                    <button
                        class="px-6 flex items-center justify-center bg-white/10 backdrop-blur-md rounded-full text-lg shadow-md hover:shadow-md hover:bg-indigo-700 hover:text-white"
                    >
                        Rent
                    </button>
                    <button
                        class="px-6 flex items-center justify-center bg-white/10 backdrop-blur-md rounded-full text-lg shadow-md hover:shadow-md hover:bg-indigo-700 hover:text-white"
                    >
                        Manage
                    </button>
                </div>
                <!-- filter and search design -->
                <SearchComponent />
                <!-- small caurosel cards starts here -->
                <div
                    class="flex justify-center overflow-hidden items-center space-x-4 max-h-72 animated fadeIn faster outline-none focus:outline-none"
                >
                    <!-- bigining of first card -->
                    <div
                        v-for="gold in goldProperties"
                        :key="gold.id"
                        class="bg-white/10 backdrop-blur-md shadow-lg rounded-xl"
                    >
                        <div class="flex flex-col justify-center items-center">
                            <img
                                src="https://images.unsplash.com/photo-1622180203374-9524a54b734d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                alt="Just a flower"
                                class="object-cover h-3/6 w-48 rounded-t-lg"
                            />
                            <div class="flex-auto ml-3">
                                <div class="flex flex-wrap">
                                    <h2 class="flex-auto text-lg font-medium">
                                        {{ gold.class }}
                                    </h2>
                                </div>
                                <div class="flex py-2 text-sm text-gray-500">
                                    <div
                                        class="flex-1 inline-flex items-center"
                                    >
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
                                        <p class="">
                                            {{
                                                gold.location
                                                    .substring(0, 9)
                                                    .trim()
                                            }}
                                        </p>
                                    </div>
                                    <div
                                        class="flex-1 inline-flex items-center"
                                    >
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
                                        <p class="">
                                            #<span
                                                class="text-green-500 font-semibold"
                                                >250000</span
                                            >
                                        </p>
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
                class="col-span-2 transition duration-500 fadeIn ease-in-out flex justify-center items-center inset-0 z-0 outline-none focus:outline-none"
            >
                <div class="flex flex-col items-center justify-center">
                    <div
                        class="w-[22rem] sm:w-full bg-white/10 backdrop-blur-md shadow rounded-xl p-2"
                    >
                        <div
                            v-for="platinum in platinumProperties"
                            :key="platinum.id"
                            class="flex flex-col"
                        >
                            <div class="relative h-62 w-full mb-3">
                                <LikeComponent></LikeComponent>
                                <img
                                    src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1567&amp;q=80"
                                    alt="Just a flower"
                                    class="w-full object-fill rounded-2xl"
                                />
                            </div>
                            <div class="flex-auto justify-evenly">
                                <div class="flex flex-wrap">
                                    <div
                                        class="w-full flex-none text-sm flex items-center text-gray-600"
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
                                            class="text-gray-400 whitespace-nowrap mr-3"
                                            >4.60</span
                                        ><span class="mr-2 text-gray-400"
                                            >Kaduna</span
                                        >
                                    </div>
                                    <div
                                        class="flex items-center w-full justify-between min-w-0"
                                    >
                                        <h2
                                            class="text-lg mr-auto cursor-pointer text-gray-600 truncate"
                                        >
                                            {{ platinum.feature }}
                                        </h2>
                                        <div
                                            class="flex items-center bg-green-400 text-white text-xs px-2 py-1 ml-3 rounded-lg"
                                        >
                                            AVAILABLE
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-10 mb-3">
                                    <div class="text-xl text-gray-600 mt-1">
                                        $<span
                                            class="text-green-500 font-semibold"
                                            >240.00</span
                                        >
                                    </div>
                                    <div
                                        class="hover:text-yellow-500 cursor-pointer p-1 py-0"
                                    >
                                        Bungalow
                                    </div>
                                </div>
                                <div
                                    class="flex space-x-2 text-sm font-medium justify-start"
                                >
                                    <button
                                        class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-indigo-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-indigo-600"
                                    >
                                        <span>Check</span>
                                    </button>
                                    <button
                                        class="transition ease-in duration-300 bg-gray-700 hover:bg-gray-800 border hover:border-gray-500 border-gray-700 hover:text-white hover:shadow-lg text-gray-400 rounded-full w-9 h-9 text-center p-2"
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
    </body>
</template>

<script>
import SearchComponent from '@/Components/Search';
import LikeComponent from '@/Components/Like';
export default {
    name: 'HeroSection',
    components: {
        SearchComponent,
        LikeComponent,
    },
    props: {
        platinumProperties: Object,
        goldProperties: Object,
    },
};
</script>
<style scoped>
body {
    background-color: #eeeded;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%239C92AC' fill-opacity='0.4' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
}
</style>
