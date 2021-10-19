<!--
  This example requires Tailwind CSS v2.0+ 
  
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
        <div class="pt-6">
          <nav class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8" aria-label="Breadcrumb">
           
            <div class="font-semibold bg-indigo-400 rounded text-white px-1 hover:text-indigo-600">
              {{property.landlord.user.name}}
            </div>
             
          </nav>

          <!-- Image gallery -->
          <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
              <img :src="property.images"  class="w-full h-full object-center object-cover" />
            </div>
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
              <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                <img :src="property.images"  class="w-full h-full object-center object-cover" />
              </div>
              <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                <img :src="property.images" class="w-full h-full object-center object-cover" />
              </div>
            </div>
            <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
              <img :src="property.images" class="w-full h-full object-center object-cover" />
            </div>
          </div>

          <!-- Product info -->
          <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
              <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                {{property.name}}
              </h1>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:mt-0 lg:row-span-3">
              <h2 class="sr-only">Product information</h2>
              <p class="text-3xl text-gray-900">${{ property.price }}</p>

              <!-- Reviews -->
              

              <form class="mt-10">
                <!-- Colors -->
                

                <!-- Sizes -->
              

                <button type="submit" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Enquire</button>
              </form>
            </div>

            <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
              <!-- Description and details -->
              <div>
                <h3 class="sr-only">Description</h3>

                <div class="space-y-6">
                  <p class="text-base text-gray-900">{{ property.description }}</p>
                </div>
              </div>

              <div class="mt-10">
                <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                <div class="mt-4">
                  <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                    <li class="text-gray-400">
                      <span class="text-gray-600">highlights</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="mt-10">
                <h2 class="text-sm font-medium text-gray-900">Details</h2>

                <div class="mt-4 space-y-6">
                  <p class="text-sm text-gray-600">{{ property.feature }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</template>

<script>
import GuestLayout from '@/Layouts/Guest.vue';
import { StarIcon } from '@heroicons/vue/solid'
import { RadioGroup, RadioGroupLabel, RadioGroupOption } from '@headlessui/vue'


export default {
	layout:GuestLayout,
  components: {
    RadioGroup,
    RadioGroupLabel,
    RadioGroupOption,
    StarIcon,
  },
  props:{
    property:Object
  },
  setup() {
    

    },
}
</script>
<style scoped>

</style>