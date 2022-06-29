import './bootstrap';

// Import modules...
import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import VTooltipPlugin from 'v-tooltip';
import 'v-tooltip/dist/v-tooltip.css';
import GuestLayout from '@/Layouts/Guest';

// const el = document.getElementById('app');

// createApp({
//     render: () =>
//         h(InertiaApp, {
//             initialPage: JSON.parse(el.dataset.page),
//             resolveComponent: (name) => {
//                 const page = require(`./Pages/${name}`).default;
//                 page.layout = page.layout || GuestLayout;

//                 return page;
//             },
//             title: (title) => `${title}-hello`,
//         }),
// })
//     .mixin({ methods: { route } })
//     .component('Link', Link)
//     .use(InertiaPlugin)
//     .use(VTooltipPlugin)
//     .mount(el);

createInertiaApp({
    resolve: (name) => {
        const page = require(`./Pages/${name}`).default;
        page.layout = page.layout || GuestLayout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .mixin({ methods: { route } })
            .component('Link', Link)
            .component('Head', Head)
            .use(plugin)
            .use(VTooltipPlugin)
            .mount(el);
    },
    title: (title) => `Gethouse - ${title}`,
});

InertiaProgress.init({ color: '#10eb10', showSpinner: true });
