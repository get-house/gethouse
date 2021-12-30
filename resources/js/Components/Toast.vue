<template>
    <div
        v-if="flash && visible"
        class="bg-slate-100 text-rose-600 p-4 shadow-lg rounded-lg"
    >
        {{ flash.message }}
    </div>
</template>

<script>
export default {
    data() {
        return {
            visible: false,
            flash: this.$page.props.flash,
        };
    },
    //create a watch for flash
    watch: {
        flash: {
            handler() {
                this.visible = true;
                setTimeout(() => {
                    this.visible = false;
                }, 5000);
            },
            immediate: true,
        },
    },
};
</script>
