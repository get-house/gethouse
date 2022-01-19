<template>
    <div
        class="bg-white/10 backdrop-blur-md rounded-md flex flex-wrap gap-10 shadow"
    >
        <div class="flex flex-col text-center">
            <!-- <label class="text-xs">city/street</label>
            <select class="rounded-lg focus:outline-none text-sm font-semibold">
                <option value="">Street1</option>
            </select> -->
            <Listbox v-model="selectedPerson">
                <ListboxLabel>location:</ListboxLabel>
                <div class="relative">
                    <ListboxButton
                        class="relative w-full py-1 pl-3 pr-10 text-left text-gray-800 rounded-lg cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-white focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                    >
                        <span class="block truncate">{{
                            selectedPerson.name
                        }}</span>
                        <span
                            class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none"
                        >
                            <SelectorIcon
                                class="w-5 h-5 text-gray-400"
                                aria-hidden="true"
                            />
                        </span>
                    </ListboxButton>

                    <transition
                        leave-active-class="transition duration-100 ease-in"
                        leave-from-class="opacity-100"
                        leave-to-class="opacity-0"
                    >
                        <ListboxOptions
                            class="absolute w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                        >
                            <ListboxOption
                                v-slot="{ active, selected }"
                                v-for="person in people"
                                :key="person.name"
                                :value="person"
                                as="template"
                            >
                                <li
                                    :class="[
                                        active
                                            ? 'text-indigo-900 bg-indigo-100'
                                            : 'text-gray-900',
                                        'cursor-default select-none relative py-2 pl-10 pr-4',
                                    ]"
                                >
                                    <span
                                        :class="[
                                            selected
                                                ? 'font-medium'
                                                : 'font-normal',
                                            'block truncate',
                                        ]"
                                        >{{ person.name }}</span
                                    >
                                    <span
                                        v-if="selected"
                                        class="absolute inset-y-0 left-0 flex items-center text-indigo-600"
                                    >
                                        <CheckIcon
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                        />
                                    </span>
                                </li>
                            </ListboxOption>
                        </ListboxOptions>
                    </transition>
                </div>
            </Listbox>
        </div>
        <div class="flex flex-col text-center">
            <Listbox v-model="selectedPerson">
                <ListboxLabel>property type:</ListboxLabel>
                <div class="relative">
                    <ListboxButton
                        class="relative w-full py-1 pl-3 pr-10 text-left text-gray-800 rounded-lg cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-white focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                    >
                        <span class="block truncate">{{
                            selectedPerson.name
                        }}</span>
                        <span
                            class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none"
                        >
                            <SelectorIcon
                                class="w-5 h-5 text-gray-400"
                                aria-hidden="true"
                            />
                        </span>
                    </ListboxButton>

                    <transition
                        leave-active-class="transition duration-100 ease-in"
                        leave-from-class="opacity-100"
                        leave-to-class="opacity-0"
                    >
                        <ListboxOptions
                            class="absolute w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                        >
                            <ListboxOption
                                v-slot="{ active, selected }"
                                v-for="person in people"
                                :key="person.name"
                                :value="person"
                                as="template"
                            >
                                <li
                                    :class="[
                                        active
                                            ? 'text-indigo-900 bg-indigo-100'
                                            : 'text-gray-900',
                                        'cursor-default select-none relative py-2 pl-10 pr-4',
                                    ]"
                                >
                                    <span
                                        :class="[
                                            selected
                                                ? 'font-medium'
                                                : 'font-normal',
                                            'block truncate',
                                        ]"
                                        >{{ person.name }}</span
                                    >
                                    <span
                                        v-if="selected"
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 text-indigo-600"
                                    >
                                        <CheckIcon
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                        />
                                    </span>
                                </li>
                            </ListboxOption>
                        </ListboxOptions>
                    </transition>
                </div>
            </Listbox>
        </div>
        <div class="flex flex-col text-center">
            <Listbox v-model="selectedPerson">
                <ListboxLabel>price range:</ListboxLabel>
                <div class="relative">
                    <ListboxButton
                        class="relative w-full py-1 pl-3 pr-10 text-left text-gray-800 rounded-lg cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-white focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                    >
                        <span class="block truncate">{{
                            selectedPerson.name
                        }}</span>
                        <span
                            class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none"
                        >
                            <SelectorIcon
                                class="w-5 h-5 text-gray-400"
                                aria-hidden="true"
                            />
                        </span>
                    </ListboxButton>

                    <transition
                        leave-active-class="transition duration-100 ease-in"
                        leave-from-class="opacity-100"
                        leave-to-class="opacity-0"
                    >
                        <ListboxOptions
                            class="absolute w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                        >
                            <ListboxOption
                                v-slot="{ active, selected }"
                                v-for="person in people"
                                :key="person.name"
                                :value="person"
                                as="template"
                            >
                                <li
                                    :class="[
                                        active
                                            ? 'text-indigo-900 bg-indigo-100'
                                            : 'text-gray-900',
                                        'cursor-default select-none relative py-2 pl-10 pr-4',
                                    ]"
                                >
                                    <span
                                        :class="[
                                            selected
                                                ? 'font-medium'
                                                : 'font-normal',
                                            'block truncate',
                                        ]"
                                        >{{ person.name }}</span
                                    >
                                    <span
                                        v-if="selected"
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 text-indigo-600"
                                    >
                                        <CheckIcon
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                        />
                                    </span>
                                </li>
                            </ListboxOption>
                        </ListboxOptions>
                    </transition>
                </div>
            </Listbox>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';
import {
    Listbox,
    ListboxLabel,
    ListboxButton,
    ListboxOptions,
    ListboxOption,
} from '@headlessui/vue';
import { CheckIcon, SelectorIcon } from '@heroicons/vue/solid';
export default {
    name: 'SearchComponent',
    components: {
        Listbox,
        ListboxLabel,
        ListboxButton,
        ListboxOptions,
        ListboxOption,
        CheckIcon,
        SelectorIcon,
    },
    setup() {
        const people = [
            { name: 'Wade Cooper' },
            { name: 'Arlene Mccoy' },
            { name: 'Devon Webb' },
            { name: 'Tom Cook' },
            { name: 'Tanya Fox' },
            { name: 'Hellen Schmidt' },
        ];
        const selectedPerson = ref(people[0]);

        return {
            people,
            selectedPerson,
        };
    },
};
</script>
