<template>
    <!-- file upload input -->
    <div>
        <label class="block text-sm font-medium text-gray-700">
            Property Photos
        </label>
        <div
            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
        >
            <div class="space-y-1 text-center">
                <svg
                    class="mx-auto h-12 w-12 text-gray-400"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 48 48"
                    aria-hidden="true"
                >
                    <path
                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
                <div class="flex text-sm text-gray-600">
                    <label
                        for="photo"
                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                    >
                        <span>Upload a file</span>
                        <input
                            @change="change"
                            id="photo"
                            name="photo"
                            type="file"
                            multiple="multiple"
                            accept="image/*"
                            class="sr-only"
                            required
                        />
                    </label>
                    <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB, maximum of 6 pictures
                </p>
            </div>
        </div>
        <!-- <div
            v-if="form.errors"
            v-text="form.errors.images"
            class="text-red-600 text-xs mt-2"
        ></div>
        <progress
            v-if="form.progress"
            :value="form.progress.percentage"
            max="100"
            class="mt-2 text-orange-500"
        >
            {{ form.progress.percentage }}%
        </progress> -->
    </div>
</template>

<script setup>
import { defineEmits } from 'vue';

const emit = defineEmits(['input']);
const change = (e) => {
    emit('input', e.target.files);
};
</script>
