<template>
    <div class="grid grid-cols-4 max-h-screen">
        <div
            class="ml-10 h-[650px] w-[320px] bg-black rounded-[60px] border-[14px] border-black relative overflow-hidden ring ring-purple-400 shadow-xl"
        >
            <img
                class="absolute inset-0 h-full w-full object-cover bg-pink-400 opacity-50"
                src="https://wallpapers.hector.me/wavey/Rainbow%20iPhone%20P3.jpg"
            />
            <div class="absolute top-0 inset-x-0">
                <div class="mx-auto bg-black h-6 w-40 rounded-b-3xl"></div>
            </div>
            <div class="relative">
                <!-- Small icons on top right -->
                <div class="mr-5 mt-2 flex justify-end space-x-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-white"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"
                        />
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-white"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M17.778 8.222c-4.296-4.296-11.26-4.296-15.556 0A1 1 0 01.808 6.808c5.076-5.077 13.308-5.077 18.384 0a1 1 0 01-1.414 1.414zM14.95 11.05a7 7 0 00-9.9 0 1 1 0 01-1.414-1.414 9 9 0 0112.728 0 1 1 0 01-1.414 1.414zM12.12 13.88a3 3 0 00-4.242 0 1 1 0 01-1.415-1.415 5 5 0 017.072 0 1 1 0 01-1.415 1.415zM9 16a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-white"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"
                        />
                        <path
                            d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"
                        />
                    </svg>
                </div>
                <div
                    class="h-0.5 w-10 mt-1.5 mr-7 bg-white rounded ml-auto"
                ></div>
                <!-- Date & time -->
                <div class="mt-2 flex flex-col items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8 text-white"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z"
                        />
                    </svg>
                    <p class="mt-3 text-white text-6xl font-extralight">9:41</p>
                    <p class="mt-1 text-white text-lg font-light">
                        Monday, June 7
                    </p>
                </div>
                <!-- Notification Summary -->
                <div class="relative mt-4 mx-2">
                    <!-- Stacked panels (sitting below) -->
                    <div
                        class="absolute -bottom-4 scale-[0.85] origin-bottom inset-x-0 h-full w-full bg-white/10 backdrop-blur-md rounded-2xl"
                    ></div>
                    <div
                        class="absolute -bottom-2 scale-95 origin-bottom inset-x-0 h-full w-full bg-white/30 backdrop-blur-md rounded-3xl shadow-sm"
                    ></div>
                    <!-- Main, current panel -->
                    <div
                        class="p-4 bg-white/40 backdrop-blur-md rounded-3xl shadow"
                    >
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-bold">9:30 AM</p>
                                <h2 class="text-lg font-bold">
                                    Your Morning Summary
                                </h2>
                            </div>
                            <span
                                class="bg-gray-500 h-8 w-8 rounded-full text-white flex items-center justify-center"
                                >11</span
                            >
                        </div>
                        <div class="mt-2 grid grid-cols-2 gap-2">
                            <div>
                                <img
                                    class="rounded-lg h-24 w-full object-cover"
                                    src="https://images.unsplash.com/photo-1588974269162-4c0d5ccc6094?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3302&q=80"
                                    alt="Surfer at sunset"
                                />
                                <h3
                                    class="mt-2 text-xs font-bold leading-tight"
                                >
                                    Surfing: heals the soul, kills the ribs
                                </h3>
                                <p class="mt-1 text-xs">
                                    It's all fun and thrills until you get
                                    sucked over the falls.
                                </p>
                            </div>
                            <div>
                                <img
                                    class="rounded-lg h-24 w-full object-cover"
                                    src="https://media.bleacherreport.com/image/upload/v1625368217/ilertc3nqs53klcp9xvx.jpg"
                                    alt="CP3 vs the Greek Freak"
                                />
                                <h3
                                    class="mt-2 text-xs font-bold leading-tight"
                                >
                                    The NBA Finals are here!
                                </h3>
                                <p class="mt-1 text-xs">
                                    Bucks vs Suns is shaping up to be a very
                                    intriguing series!
                                </p>
                            </div>
                        </div>
                        <hr class="mt-4 border-black/20" />
                        <div class="mt-3 grid grid-cols-3 items-end">
                            <div class="col-span-2">
                                <h3 class="text-xs font-bold">More Updates</h3>
                                <p class="mt-0.5 text-xs">
                                    Polywork, Keystone 6, and Sarah Drasner
                                </p>
                            </div>
                            <ul
                                class="flex -space-x-4 flex-row-reverse space-x-reverse"
                            >
                                <li>
                                    <img
                                        class="h-8 w-8 rounded-xl object-cover"
                                        src="https://seeklogo.com/images/K/keystonejs-logo-C77FDB0662-seeklogo.com.png"
                                        alt=""
                                    />
                                </li>
                                <li>
                                    <img
                                        class="h-8 w-8 rounded-xl object-cover"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEZUAlsS1loKxsx8abFEgwSi5KBus3tmsQaA&usqp=CAU"
                                        alt=""
                                    />
                                </li>
                                <li>
                                    <img
                                        class="h-8 w-8 rounded-xl object-cover"
                                        src="https://images.unsplash.com/photo-1616776005756-4dca36124bf9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt=""
                                    />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flashlight, camera and bottom swipe menu -->
            <div class="absolute bottom-0 inset-x-0 h-20">
                <div class="px-10 pt-6 flex justify-between">
                    <button
                        class="bg-gray-800/40 backdrop-blur-md text-white rounded-full p-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"
                            />
                        </svg>
                    </button>
                    <button
                        class="bg-gray-800/40 backdrop-blur-md text-white rounded-full p-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </div>
                <div class="absolute bottom-1 inset-x-0">
                    <div class="mx-auto h-1 w-28 rounded bg-white"></div>
                </div>
            </div>
        </div>
        <!-- description of image -->
        <div class="col-span-3 mx-10">
            <ul class="text-xl text-gray-500 flex flex-col space-y-6">
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Laboriosam, eius! Dolorum fugiat a blanditiis pariatur
                    doloribus quis tenetur corrupti dicta, corporis et. Minus
                    saepe nam, excepturi magni reprehenderit cum ad.
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Laboriosam, eius! Dolorum fugiat a blanditiis pariatur
                    doloribus quis tenetur corrupti dicta, corporis et. Minus
                    saepe nam, excepturi magni reprehenderit cum ad.
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Laboriosam, eius! Dolorum fugiat a blanditiis pariatur
                    doloribus quis tenetur corrupti dicta, corporis et. Minus
                    saepe nam, excepturi magni reprehenderit cum ad.
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Laboriosam, eius! Dolorum fugiat a blanditiis pariatur
                    doloribus quis tenetur corrupti dicta, corporis et. Minus
                    saepe nam, excepturi magni reprehenderit cum ad.
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { ChartBarIcon } from '@heroicons/vue/24/solid';
export default {
    name: 'PhoneNotification',
    components: {
        ChartBarIcon,
    },
};
</script>
<style scoped>
.phone {
    background-color: #140a11;
    background-image: url("data:image/svg+xml,%3Csvg width='24' height='20' viewBox='0 0 24 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 18c0-1.105.887-2 1.998-2 1.104 0 2-.895 2.002-1.994V14v6h-4v-2zM0 13.998C0 12.895.888 12 2 12c1.105 0 2 .888 2 2 0 1.105.888 2 2 2 1.105 0 2 .888 2 2v2H0v-6.002zm16 4.004A1.994 1.994 0 0 1 14 20c-1.105 0-2-.887-2-1.998v-4.004A1.994 1.994 0 0 0 10 12c-1.105 0-2-.888-2-2 0-1.105-.888-2-2-2-1.105 0-2-.887-2-1.998V1.998A1.994 1.994 0 0 0 2 0a2 2 0 0 0-2 2V0h8v2c0 1.105.888 2 2 2 1.105 0 2 .888 2 2 0 1.105.888 2 2 2 1.105 0 2-.888 2-2 0-1.105.888-2 2-2 1.105 0 2-.888 2-2V0h4v6.002A1.994 1.994 0 0 1 22 8c-1.105 0-2 .888-2 2 0 1.105-.888 2-2 2-1.105 0-2 .887-2 1.998v4.004z' fill='%23090214' fill-opacity='0.48' fill-rule='evenodd'/%3E%3C/svg%3E");
}
</style>
