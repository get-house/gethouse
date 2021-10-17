<template>
    <div class="absolute flex flex-col top-0 right-0 p-3">
        <button
            v-tooltip.bottom-end="{
                content:
                    'Like this property to place <br/> it on your watch list',
                html: true,
            }"
            class="
                transition
                ease-in
                duration-300
                hover:text-blue-500
                shadow
                hover:shadow-md
                text-white
                rounded-full
                w-6
                h-6
                text-center
            "
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
            </svg>
        </button>
    </div>
</template>

<script>
export default {
    name: 'LikeComponent',
};
</script>
