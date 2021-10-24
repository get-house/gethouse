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
        <div class="pt-6 grid grid-cols-4 justify-items-center gap-x-6">
          <div class="col-span-3 px-4">
            <img src="/images/hero_house.jpg" alt="house" class="object-cover w-full h-[400px] rounded"/>
          </div>
          <div class="col-span-1">hello sticky</div>
        
        </div>
      </div>
</template>

<script>
import GuestLayout from '@/Layouts/Guest.vue';



export default {
	layout:GuestLayout,
  components: {
    
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