<!--
  This example r
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
    <div>
        <div class="pt-6 grid grid-cols-4 justify-items-center">
            <div class="col-span-3">
                <div class="example mx-10 flex overflow-x-auto">
                    <img
                        id="slider-1"
                        src="/images/hero_house.jpg"
                        alt="house"
                        class="object-cover flex-shrink-0 w-full rounded"
                    />

                    <img
                        id="slider-2"
                        src="/images/hero_house.jpg"
                        alt=""
                        class="object-cover flex-shrink-0 w-full rounded"
                    />

                    <img
                        id="slider-3"
                        src="/images/hero_house.jpg"
                        alt=""
                        class="object-cover flex-shrink-0 w-full rounded"
                    />

                    <img
                        id="slider-4"
                        src="/images/hero_house.jpg"
                        alt=""
                        class="object-cover flex-shrink-0 w-full rounded"
                    />

                    <img
                        id="slider-5"
                        src="/images/hero_house.jpg"
                        alt=""
                        class="object-cover flex-shrink-0 w-full rounded"
                    />

                    <img
                        id="slider-6"
                        src="/images/hero_house.jpg"
                        alt=""
                        class="object-cover flex-shrink-0 w-full rounded"
                    />

                    <img
                        id="slider-7"
                        src="/images/hero_house.jpg"
                        alt=""
                        class="object-cover flex-shrink-0 w-full rounded"
                    />

                    <img
                        id="slider-8"
                        src="/images/hero_house.jpg"
                        alt=""
                        class="object-cover flex-shrink-0 w-full rounded"
                    />
                </div>
                <div
                    class="
                        example
                        flex
                        justify-center
                        space-x-4
                        my-8
                        mx-10
                        overflow-x-scroll
                        overscroll-x-contain
                    "
                >
                    <a href="#slider-1">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>

                    <a href="#slider-2">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>

                    <a href="#slider-3">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>

                    <a href="#slider-4">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>

                    <a href="#slider-5">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>

                    <a href="#slider-6">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>

                    <a href="#slider-7">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>

                    <a href="#slider-8">
                        <img
                            src="/images/hero_house.jpg"
                            alt=""
                            class="w-40 rounded"
                        />
                    </a>
                </div>
            </div>
            <div class="col-span-1 bg-gray-400 px-2">
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tempore aut quibusdam reiciendis debitis rem rerum impedit
                    dignissimos placeat consequuntur facilis ex, atque corrupti
                    quasi aperiam non, necessitatibus magnam est obcaecati.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import GuestLayout from '@/Layouts/Guest.vue';

export default {
    layout: GuestLayout,
    components: {},
    props: {
        property: Object,
    },
    setup() {},
};
</script>
<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
.example::-webkit-scrollbar {
    width: 0;
    height: 0;
}

/* Hide scrollbar for IE, Edge and Firefox */
.example {
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}
</style>
