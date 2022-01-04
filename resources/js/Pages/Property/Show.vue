<template>
    <Head title="property" />
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pt-6">
        <div class="md:col-span-3 mx-6">
            <ImageGallery />
            <div
                class="grid grid-cols-1 md:grid-cols-2 justify-items-start my-4"
            >
                <div class="flex space-x-4">
                    <p class="text-slate-700">property verified</p>
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
                    <button type="button">
                        <ShareIcon
                            class="w-6 h-6 text-indigo-300 hover:text-indigo-500"
                        />
                    </button>
                </div>
            </div>
            <h2 class="text-gray-800 text-xl font-semibold my-4">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis
                velit unde incidunt hic id. Ipsa, quod.
            </h2>
            <p class="flex space-x-2 my-4 text-slate-800">
                karuma, abuja
                <span>
                    <LocationMarkerIcon class="w-6 h-6 text-indigo-400" />
                </span>
            </p>
            <p class="text-indigo-600">
                &#8358; 250,000 <span class="text-slate-800">/month</span>
            </p>
            <!-- a flex showing property details -->
            <!-- <div class="flex flex-col space-y-4">
                <div class="flex space-x-2">
                    <p class="text-gray-800">
                        <span class="text-indigo-600">
                            <BedIcon class="w-6 h-6" />
                        </span>
                        3
                    </p>
                    <p class="text-gray-800">
                        <span class="text-indigo-600">
                            <BathIcon class="w-6 h-6" />
                        </span>
                        2
                    </p>
                    <p class="text-gray-800">
                        <span class="text-indigo-600">
                            <SquareIcon class="w-6 h-6" />
                        </span>
                        500
                    </p>
                </div>
                <div class="flex space-x-2">
                    <p class="text-gray-800">
                        <span class="text-indigo-600">
                            <BedIcon class="w-6 h-6" />
                        </span>
                        3
                    </p>
                    <p class="text-gray-800">
                        <span class="text-indigo-600">
                            <BathIcon class="w-6 h-6" />
                        </span>
                        2
                    </p>
                    <p class="text-gray-800">
                        <span class="text-indigo-600">
                            <SquareIcon class="w-6 h-6" />
                        </span>
                        500
                    </p>
                </div>
            </div> -->
            <div class="my-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">
                    Property Description
                </h2>
                <p class="text-slate-800">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Alias, adipisci. Veniam atque totam molestias ab culpa
                    quisquam voluptates id ex dolorum consequatur, facilis non
                    molestiae iusto laboriosam! Sed, asperiores. Officia.
                </p>
            </div>
            <div class="my-4">
                <h2 class="text-lg font-semibold text-gray-800">Features:</h2>
                <ul class="text-slate-800 ml-4 list-disc">
                    <li>fully furnished apartment</li>
                    <li>fully furnished apartment</li>
                    <li>fully furnished apartment</li>
                    <li>fully furnished apartment</li>
                    <li>fully furnished apartment</li>
                </ul>
            </div>
        </div>
        <div
            class="sticky top-0 justify-self-center h-min md:min-w-[20rem] md:col-span-1 md:mr-8 bg-slate-100 px-4 border-t-4 border-indigo-600 rounded"
        >
            <div class="m-2">
                <h2 class="text-xl font-semibold">
                    &#8358;200,000
                    <span class="text-sm">/month</span>
                </h2>
                <div
                    class="flex items-baseline space-x-1 pb-2 border-b-2 border-indigo-300"
                >
                    <p class="text-indigo-500">Security deposit:</p>
                    <span class="font-semibold text-xl text-gray-800">
                        &#8358;150,000</span
                    >
                    <button
                        v-tooltip.top="{
                            content:
                                '<small>Security Deposit is a refundable <br/> rent insurance to protect against <br/> damages and rent defaulting.</small>',
                            html: true,
                        }"
                    >
                        <QuestionMarkCircleIcon
                            class="w-4 h-4 text-indigo-500"
                        />
                    </button>
                </div>
                <p class="text-indigo-400 text-sm my-4">
                    Note: Tenants must inspect property before renting.
                </p>
            </div>

            <!-- headless ui for vue js dropdown -->
            <div class="my-6">
                <!-- tabs -->
                <TabGroup>
                    <TabList
                        class="flex justify-start items-center max-w-[14rem] mb-6"
                    >
                        <Tab v-slot="{ selected }" as="template">
                            <button
                                class="bg-white rounded rounded-r-none shadow-sm p-2"
                                :class="{
                                    'bg-indigo-600 text-white': selected,
                                }"
                                @click="isShowing = true"
                            >
                                Inspect property
                            </button>
                        </Tab>
                        <Tab v-slot="{ selected }" as="template"
                            ><button
                                class="bg-white rounded rounded-l-none shadow-sm p-2"
                                :class="{
                                    'bg-indigo-600 text-white': selected,
                                }"
                            >
                                Rent now
                            </button></Tab
                        >
                    </TabList>
                    <TabPanels>
                        <TabPanel>
                            <TransitionRoot
                                appear
                                :show="isShowing"
                                enter="transform transition duration-[900ms]"
                                enter-from="opacity-0 rotate-[-120deg] scale-50"
                                enter-to="opacity-100 rotate-0 scale-100"
                                leave="transform duration-200 transition ease-in-out"
                                leave-from="opacity-100 rotate-0 scale-100 "
                                leave-to="opacity-0 scale-95 "
                            >
                                <Listbox v-model="selectedInspection">
                                    <div
                                        class="relative border-2 border-indigo-300 rounded-md my-4 max-w-[14rem]"
                                    >
                                        <ListboxButton
                                            class="relative w-full py-1 pl-3 pr-10 text-left text-gray-800 rounded-lg cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-indigo-400 focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                                        >
                                            <span
                                                class="block truncate cursor-pointer"
                                                >{{
                                                    selectedInspection.name
                                                }}</span
                                            >
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
                                                    v-slot="{
                                                        active,
                                                        selected,
                                                    }"
                                                    v-for="inspect in inspection"
                                                    :key="inspect.name"
                                                    :value="inspect"
                                                    as="template"
                                                >
                                                    <li
                                                        :class="[
                                                            active
                                                                ? 'text-indigo-900 bg-indigo-100'
                                                                : 'text-gray-900',
                                                            'cursor-pointer  select-none relative py-2 pl-10 pr-4',
                                                        ]"
                                                    >
                                                        <span
                                                            :class="[
                                                                selected
                                                                    ? 'font-medium'
                                                                    : 'font-normal',
                                                                'block truncate',
                                                            ]"
                                                            >{{
                                                                inspect.name
                                                            }}</span
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
                                <div class="">
                                    <p class="text-xs my-4">
                                        inspection time and date
                                    </p>
                                    <p
                                        class="flex items-end space-x-1 text-indigo-400 text-sm"
                                    >
                                        <span> select date and time </span>
                                        <button
                                            v-tooltip.bottom="{
                                                content:
                                                    '<small>Date of inspection should not be  <br/> more than 7 days in advance.</small>',
                                                html: true,
                                            }"
                                        >
                                            <QuestionMarkCircleIcon
                                                class="w-4 h-4 text-indigo-500"
                                            />
                                        </button>
                                    </p>

                                    <Datepicker
                                        v-model="date"
                                        monthNameFormat="long"
                                        class="max-w-[14rem] my-4 border-indigo-300"
                                    />
                                </div>
                                <div
                                    class="flex items-center space-x-2 text-sm mt-8 mb-4"
                                >
                                    <input
                                        id="remember-me"
                                        name="remember-me"
                                        type="checkbox"
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                                    />
                                    <div>
                                        <span>I agree to</span>
                                        <a
                                            class="text-indigo-500 hover:underline"
                                            href="/tenant-terms"
                                        >
                                            tenancy terms</a
                                        >
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <button
                                        class="text-center bg-indigo-600 text-white rounded p-2 mt-2 shadow"
                                    >
                                        Schedule inspection
                                    </button>
                                </div>
                            </TransitionRoot>
                        </TabPanel>
                        <!-- second tab panel -->
                        <TabPanel>
                            <TransitionRoot
                                appear
                                :show="isShowing"
                                enter="transform transition duration-[900ms]"
                                enter-from="opacity-0 rotate-[-120deg] scale-50"
                                enter-to="opacity-100 rotate-0 scale-100"
                                leave="transform duration-200 transition ease-in-out"
                                leave-from="opacity-100 rotate-0 scale-100 "
                                leave-to="opacity-0 scale-95 "
                            >
                                <div
                                    class="flex flex-wrap items-center mb-6 pb-6 border-b-2 border-indigo-300"
                                >
                                    <div class="flex flex-col">
                                        <p class="text-sm my-2">Duration</p>
                                        <Listbox v-model="selectedDurations">
                                            <div
                                                class="relative border-2 border-indigo-300 rounded-md max-w-[14rem] min-h-[2.5rem] text-center"
                                            >
                                                <ListboxButton
                                                    class="relative w-full py-1 pl-3 pr-10 text-left text-gray-800 rounded-lg cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-indigo-400 focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                                                >
                                                    <span
                                                        class="block truncate cursor-pointer"
                                                        >{{
                                                            selectedDurations.name
                                                        }}</span
                                                    >
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
                                                            v-slot="{
                                                                active,
                                                                selected,
                                                            }"
                                                            v-for="duration in durations"
                                                            :key="duration.name"
                                                            :value="duration"
                                                            as="template"
                                                        >
                                                            <li
                                                                :class="[
                                                                    active
                                                                        ? 'text-indigo-900 bg-indigo-100'
                                                                        : 'text-gray-900',
                                                                    'cursor-pointer  select-none relative py-2 pl-10 pr-4',
                                                                ]"
                                                            >
                                                                <span
                                                                    :class="[
                                                                        selected
                                                                            ? 'font-medium'
                                                                            : 'font-normal',
                                                                        'block truncate',
                                                                    ]"
                                                                    >{{
                                                                        duration.name
                                                                    }}</span
                                                                >
                                                                <span
                                                                    v-if="
                                                                        selected
                                                                    "
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
                                    <div class="flex flex-col ml-3">
                                        <p class="text-sm my-2">Payment plan</p>
                                        <Listbox v-model="selectedPaymentPlan">
                                            <div
                                                class="relative border-2 border-indigo-300 rounded-md max-w-[14rem] min-h-[2.5rem] text-center"
                                            >
                                                <ListboxButton
                                                    class="relative w-full py-1 pl-3 pr-10 text-left text-gray-800 rounded-lg cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-indigo-400 focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                                                >
                                                    <span
                                                        class="block truncate cursor-pointer"
                                                        >{{
                                                            selectedPaymentPlan.name
                                                        }}</span
                                                    >
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
                                                            v-slot="{
                                                                active,
                                                                selected,
                                                            }"
                                                            v-for="plan in paymentPlan"
                                                            :key="plan.name"
                                                            :value="plan"
                                                            as="template"
                                                        >
                                                            <li
                                                                :class="[
                                                                    active
                                                                        ? 'text-indigo-900 bg-indigo-100'
                                                                        : 'text-gray-900',
                                                                    'cursor-pointer  select-none relative py-2 pl-10 pr-4',
                                                                ]"
                                                            >
                                                                <span
                                                                    :class="[
                                                                        selected
                                                                            ? 'font-medium'
                                                                            : 'font-normal',
                                                                        'block truncate',
                                                                    ]"
                                                                    >{{
                                                                        plan.name
                                                                    }}</span
                                                                >
                                                                <span
                                                                    v-if="
                                                                        selected
                                                                    "
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
                                    <div class="flex flex-col">
                                        <p class="text-sm my-2">Book as</p>
                                        <Listbox v-model="selectedBookAs">
                                            <div
                                                class="relative border-2 border-indigo-300 rounded-md max-w-[14rem] min-h-[2.5rem] text-center"
                                            >
                                                <ListboxButton
                                                    class="relative w-full py-1 pl-3 pr-10 text-left text-gray-800 rounded-lg cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-indigo-400 focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                                                >
                                                    <span
                                                        class="block truncate cursor-pointer"
                                                        >{{
                                                            selectedBookAs.name
                                                        }}</span
                                                    >
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
                                                            v-slot="{
                                                                active,
                                                                selected,
                                                            }"
                                                            v-for="book in bookAs"
                                                            :key="book.name"
                                                            :value="book"
                                                            as="template"
                                                        >
                                                            <li
                                                                :class="[
                                                                    active
                                                                        ? 'text-indigo-900 bg-indigo-100'
                                                                        : 'text-gray-900',
                                                                    'cursor-pointer  select-none relative py-2 pl-10 pr-4',
                                                                ]"
                                                            >
                                                                <span
                                                                    :class="[
                                                                        selected
                                                                            ? 'font-medium'
                                                                            : 'font-normal',
                                                                        'block truncate',
                                                                    ]"
                                                                    >{{
                                                                        book.name
                                                                    }}</span
                                                                >
                                                                <span
                                                                    v-if="
                                                                        selected
                                                                    "
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
                                    <span
                                        class="flex flex-col self-center ml-3"
                                    >
                                        <label class="text-sm my-2" for="start"
                                            >Move in date:</label
                                        >

                                        <input
                                            type="date"
                                            id="start"
                                            name="trip-start"
                                            value="2018-07-22"
                                            min="2018-01-01"
                                            max="2018-12-31"
                                            class="border-2 border-indigo-300 bg-slate-100 rounded-md max-w-[14rem] max-h-[2.5rem] text-center"
                                        />
                                    </span>
                                </div>
                                <div class="flex justify-between my-2">
                                    <p>Monthly rent:</p>
                                    <p class="text-indigo-400">
                                        &#8358;200,000
                                    </p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Security Deposit:</p>
                                    <p class="text-indigo-400">
                                        &#8358;150,000
                                    </p>
                                </div>
                                <h2 class="text-2xl font-bold my-4">
                                    &#8358;350,000
                                </h2>

                                <div class="flex justify-center">
                                    <button
                                        class="text-center bg-indigo-600 text-white rounded py-2 px-6 mt-2 shadow"
                                    >
                                        Pay now
                                    </button>
                                </div>
                            </TransitionRoot>
                        </TabPanel>
                    </TabPanels>
                </TabGroup>
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
    LocationMarkerIcon,
    QuestionMarkCircleIcon,
    CheckIcon,
    SelectorIcon,
} from '@heroicons/vue/solid';
import {
    Listbox,
    ListboxLabel,
    ListboxButton,
    ListboxOptions,
    ListboxOption,
    TabGroup,
    TabList,
    Tab,
    TabPanels,
    TabPanel,
    TransitionRoot,
} from '@headlessui/vue';
import { ref } from 'vue';
import Datepicker from 'vue3-date-time-picker';
import 'vue3-date-time-picker/dist/main.css';
import ImageGallery from '@/Components/ImageGallery';

defineProps: ({
    property: Object,
});

const inspection = [
    { name: 'Physical inspection' },
    { name: 'Virtual inspection' },
];

const durations = [{ name: '12 month' }, { name: '24 month' }];

const paymentPlan = [
    { name: 'Monthly' },
    { name: 'Quarterly' },
    { name: 'Yearly' },
    { name: 'Bi-annually' },
    { name: 'Upfront' },
];

const bookAs = [{ name: 'Individual' }, { name: 'Corporate' }];

const selectedInspection = ref(inspection[0]);
const selectedDurations = ref(durations[0]);
const selectedPaymentPlan = ref(paymentPlan[0]);
const selectedBookAs = ref(bookAs[0]);

const isShowing = ref(true);
const date = ref(new Date());
</script>
<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
.scrollbar-none::-webkit-scrollbar {
    display: none;
}
/* Hide scrollbar for IE and Edge */
.scrollbar-none {
    -ms-overflow-style: none;
}
/* Hide scrollbar for Firefox */
.scrollbar-none::-moz-scrollbar {
    display: none;
}
</style>
