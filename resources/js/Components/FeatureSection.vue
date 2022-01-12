<template>
    <h4 class="text-center font-bold text-3xl text-slate-700 my-10">
        Looking for a Property to
        <span class="text-indigo-400">rent/buy?</span>
    </h4>
    <div class="flex justify-between mx-10 my-4">
        <div class="px-6 mx-6">
            <div class="flex flex-col space-y-4 my-4">
                <h2 class="font-bold text-3xl flex items-center space-x-2">
                    <span
                        ><ScaleIcon class="w-8 h-8 text-indigo-400 mr-2"
                    /></span>
                    Zero Legal & Agency Fees
                </h2>
                <p class="text-lg">
                    We directly connect you to verified owners to save brokerage
                    & legal fees. Never any surprise or hidden fees.
                </p>
            </div>
            <div class="flex flex-col space-y-4 my-4">
                <h2 class="font-bold text-3xl flex items-center space-x-2">
                    <span>
                        <CreditCardIcon class="w-8 h-8 text-indigo-400 mr-2" />
                    </span>
                    Flexible Payment
                </h2>
                <p class="text-lg">
                    Subscribe to any of our flexible payment methods & pay your
                    rent with ease.
                </p>
            </div>
            <div class="flex flex-col space-y-4 my-4">
                <h2 class="font-bold text-3xl flex items-center space-x-2">
                    <span>
                        <BadgeCheckIcon class="w-8 h-8 text-indigo-400 mr-2" />
                    </span>
                    Vetted Properties
                </h2>
                <p class="text-lg">
                    Browse & filter our growing unique listings.
                </p>
            </div>
        </div>
        <div class="">
            <img
                src="/images/undraw_knowledge_re_leit.svg"
                alt="undraw_knowledge_re_leit.svg"
                class="w-auto object-cover"
            />
        </div>
    </div>
    <div class="flex justify-center mb-10">
        <button
            class="bg-white text-gray-600 text-xl px-4 py-2 text-center border border-gray-500/50 rounded hover:bg-indigo-500 hover:text-slate-100"
        >
            Get Started
        </button>
    </div>
    <h4 class="text-center font-bold text-3xl text-slate-700 mb-10 mt-20">
        Are you a Property <span class="text-indigo-400">owner/agent?</span>
    </h4>
    <div class="flex justify-between mx-10 my-6">
        <div class="">
            <img
                src="/images/undraw_growth_curve_re_t5s7.svg"
                alt="growthcurve"
                class="w-auto object-cover"
            />
        </div>
        <div class="px-6 mx-6">
            <div class="flex flex-col space-y-4 my-4">
                <h2 class="font-bold text-3xl flex items-center space-x-2">
                    <span
                        ><BadgeCheckIcon class="w-8 h-8 text-indigo-400 mr-2"
                    /></span>
                    Vetted Tenants
                </h2>
                <p class="text-lg">
                    RSS makes finding a perfect tenant simple. We conduct
                    thorough background, professional and financial check on any
                    prospective tenant.
                </p>
            </div>
            <div class="flex flex-col space-y-4 my-4">
                <h2 class="font-bold text-3xl flex items-center space-x-2">
                    <span>
                        <CashIcon class="w-8 h-8 text-indigo-400 mr-2" />
                    </span>
                    Steady Income
                </h2>
                <p class="text-lg">
                    What's better than getting rent? Getting rent regularly.
                    Dont wait till the end of the year before you get your next
                    rent.
                </p>
            </div>
            <div class="flex flex-col space-y-4 my-4">
                <h2 class="font-bold text-3xl flex items-center space-x-2">
                    <span>
                        <ClipboardCheckIcon
                            class="w-8 h-8 text-indigo-400 mr-2"
                        />
                    </span>
                    Quality Management
                </h2>
                <p class="text-lg">
                    We ensure your property stays in good shape, and you spend
                    less.
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-10">
        <button
            class="bg-white text-gray-600 text-xl px-4 py-2 text-center border border-gray-500/50 rounded hover:bg-indigo-500 hover:text-slate-100"
        >
            Get Started
        </button>
    </div>
</template>

<script setup>
import {
    ScaleIcon,
    CreditCardIcon,
    BadgeCheckIcon,
    CashIcon,
    ClipboardCheckIcon,
} from '@heroicons/vue/outline';
</script>
