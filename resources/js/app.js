import './bootstrap';
import '../css/app.css';

// Import modules...
import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import VTooltipPlugin from 'v-tooltip';
import 'v-tooltip/dist/v-tooltip.css';
import GuestLayout from '@/Layouts/Guest.vue';

createInertiaApp({
    progress: {
        color: '#10eb10',
        showSpinner: true,
    },
    resolve: (name) => {
        // const page = require(`./Pages/${name}`).default;
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        );
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

//{ color: '#10eb10', showSpinner: true }
