<template>
    <Head>
        <title>Welcome</title>
    </Head>
    <!-- lets go there -->
    <div>
        <!-- hero section -->
        <HeroSection
            :platinumProperties="platinumProperties"
            :goldProperties="goldProperties"
        ></HeroSection>
        <!-- nearby section -->
        <!-- <HomepageNearby /> -->
        <!-- features section -->
        <FeatureSection></FeatureSection>
        <!-- featured Notification section -->
        <PhoneNotification />
    </div>
</template>

<style scoped></style>

<script>
import GuestLayout from '@/Layouts/Guest.vue';
import HeroSection from '@/Components/Hero.vue';
import FeatureSection from '@/Components/FeatureSection.vue';
import PhoneNotification from '@/Components/PhoneNotification.vue';
import HomepageNearby from '@/Components/HomepageNearby.vue';
import {
    ChatBubbleBottomCenterTextIcon,
    GlobeAltIcon,
    BoltIcon,
    ScaleIcon,
} from '@heroicons/vue/24/outline';

export default {
    layout: GuestLayout,
    components: {
        ChatBubbleBottomCenterTextIcon,
        GlobeAltIcon,
        BoltIcon,
        ScaleIcon,
        HeroSection,
        FeatureSection,
        PhoneNotification,
        HomepageNearby,
    },

    props: {
        auth: Object,
        platinumProperties: Object,

        goldProperties: Object,

        canLogin: Boolean,
        canRegister: Boolean,
        errors: Object,
        laravelVersion: String,
        phpVersion: String,
    },
};
</script>
<style></style>
