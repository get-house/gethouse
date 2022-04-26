<script setup>
import { onMounted, ref } from 'vue';

let pictures = ref([
    '/images/hero_house.jpg',
    '/images/home2.jpg',
    '/images/home3.jpg',
    '/images/home4.jpg',
    '/images/home5.jpg',
]);

let currentPicture = ref(pictures.value[0]);

onMounted(() => {
    setInterval(() => {
        let index = pictures.value.indexOf(currentPicture.value);
        index = index + 1 >= pictures.value.length ? 0 : index + 1;
        currentPicture.value = pictures.value[index];
    }, 6000);
});

//a method that changes the current picture using the index of the picture
const changePicture = (index) => {
    currentPicture.value = pictures.value[index];
    //change the current picture to the next picture after 2sec
};
</script>

<template>
    <div class="example flex overflow-hidden">
        <img
            id="current-image"
            :src="currentPicture"
            alt="house"
            class="object-cover flex-shrink-0 w-full rounded transition duration-500 ease-in-out transform translate-x-6 hover:-translate-y-1 hover:scale-110"
        />
    </div>
    <div class="flex justify-center space-x-4 my-4">
        <div v-for="(picture, index) in pictures" :key="index">
            <img
                :src="picture"
                alt=""
                class="w-40 h-28 rounded cursor-pointer"
                :class="{
                    'border-2 border-indigo-500': currentPicture === picture,
                }"
                @click="changePicture(index)"
            />
        </div>
    </div>
    <!-- <div
        class="scrollbar-none flex justify-center space-x-4 my-8 overflow-x-scroll overscroll-x-contain"
    >
        <img src="/images/hero_house.jpg" alt="" class="w-40 rounded" />
    </div> -->
</template>
