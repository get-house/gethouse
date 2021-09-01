<template>
    <div class="py-12">
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
                    Possimus magnam voluptatum cupiditate veritatis in accusamus
                    quisquam.
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
</template>

<script>
export default {
    name: 'FeatureSection',
    props: {
        features: Array,
    },
};
</script>

