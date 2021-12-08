<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div>
        <Disclosure as="nav" class="bg-gray-800" v-slot="{ open }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img
                                class="h-8 w-8"
                                src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                                alt="Workflow"
                            />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

                                <Link
                                    :href="route('home')"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    >Dashboard</Link
                                >
                                <Link
                                    :href="route('properties.index')"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    >Properties</Link
                                >
                                <Link
                                    href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    >Policies</Link
                                >
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button
                                class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            >
                                <span class="sr-only">View notifications</span>
                                <BellIcon class="h-6 w-6" aria-hidden="true" />
                            </button>

                            <!-- Profile dropdown -->

                            <!-- experimental -->
                            <div
                                v-if="$page.props.auth.user"
                                class="hidden sm:flex sm:items-center sm:ml-6"
                            >
                                <div class="ml-3 relative z-40">
                                    <breeze-dropdown align="right" width="48">
                                        <template #trigger>
                                            <span
                                                class="inline-flex rounded-md"
                                            >
                                                <button
                                                    type="button"
                                                    class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                                >
                                                    <img
                                                        class="h-8 w-8 rounded-full"
                                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt=""
                                                    />
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <breeze-dropdown-link
                                                :href="route('logout')"
                                                method="post"
                                                as="button"
                                            >
                                                Log Out
                                            </breeze-dropdown-link>
                                            <breeze-dropdown-link
                                                :href="route('home')"
                                                >Settings</breeze-dropdown-link
                                            >
                                        </template>
                                    </breeze-dropdown>
                                </div>
                            </div>
                            <!-- end of experimental -->
                            <template v-else>
                                <Link
                                    :href="route('login')"
                                    class="bg-gray-800 text-lg text-white"
                                >
                                    Sign In
                                </Link>
                            </template>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <DisclosureButton
                            class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        >
                            <span class="sr-only">Open main menu</span>
                            <MenuIcon
                                v-if="!open"
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                            <XIcon
                                v-else
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                        </DisclosureButton>
                    </div>
                </div>
            </div>

            <DisclosurePanel class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <template v-for="(item, itemIdx) in navigation" :key="item">
                        <template v-if="itemIdx === 0">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a
                                href="#"
                                class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                                >{{ item }}</a
                            >
                        </template>
                        <a
                            v-else
                            href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                            >{{ item }}</a
                        >
                    </template>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img
                                class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt=""
                            />
                        </div>
                        <div class="ml-3">
                            <div
                                class="text-base font-medium leading-none text-white"
                            >
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div
                                class="text-sm font-medium leading-none text-gray-400"
                            >
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>
                        <button
                            class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        >
                            <span class="sr-only">View notifications</span>
                            <BellIcon class="h-6 w-6" aria-hidden="true" />
                        </button>
                    </div>
                    <div
                        class="mt-3 px-2 space-y-1"
                        v-if="$page.props.auth.user"
                    >
                        <Link
                            v-for="item in profile"
                            :key="item"
                            :href="item.href"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700"
                            >{{ item.name }}</Link
                        >
                    </div>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="bg-gray-800 text-lg text-white"
                        >
                            Sign In
                        </Link>
                    </template>
                </div>
            </DisclosurePanel>
        </Disclosure>
        <main>
            <slot />

            <!-- Replace with your content -->

            <!-- /End replace -->
        </main>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
} from '@headlessui/vue';
import BreezeDropdown from '@/Components/Dropdown';
import BreezeDropdownLink from '@/Components/DropdownLink';
import { BellIcon, MenuIcon, XIcon } from '@heroicons/vue/outline';

const navigation = ['Home', 'Properties', 'Houses', 'Policies', 'Reports'];

export default {
    components: {
        Link,
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        Menu,
        MenuButton,
        MenuItem,
        MenuItems,
        BellIcon,
        MenuIcon,
        XIcon,
        BreezeDropdown,
        BreezeDropdownLink,
    },
    setup() {
        const open = ref(false);

        return {
            navigation,
            open,
        };
    },
};
</script>
