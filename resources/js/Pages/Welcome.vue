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
        <HomepageNearby />
        <!-- features section -->
        <FeatureSection :features="features"></FeatureSection>
        <!-- featured Notification section -->
        <PhoneNotification />
    </div>
</template>

<style scoped></style>

<script>
import GuestLayout from '@/Layouts/Guest';
import HeroSection from '@/Components/Hero';
import FeatureSection from '@/Components/FeatureSection';
import PhoneNotification from '@/Components/PhoneNotification';
import HomepageNearby from '@/Components/HomepageNearby';
import {
    AnnotationIcon,
    GlobeAltIcon,
    LightningBoltIcon,
    ScaleIcon,
} from '@heroicons/vue/outline';

const features = [
    {
        name: 'Extensive property reach',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: GlobeAltIcon,
    },
    {
        name: 'No hidden fees',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: ScaleIcon,
    },
    {
        name: 'Real time availability',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: LightningBoltIcon,
    },
    {
        name: 'Mobile notifications',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: AnnotationIcon,
    },
];

export default {
    layout: GuestLayout,
    components: {
        AnnotationIcon,
        GlobeAltIcon,
        LightningBoltIcon,
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

    setup() {
        return {
            features,
        };
    },
};
</script>
<style></style>
