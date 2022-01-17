import { createSSRApp, h } from 'vue';
import { renderToString } from '@vue/server-renderer';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import createServer from '@inertiajs/server';

import route from 'ziggy';

createServer((page) =>
    createInertiaApp({
        page,
        render: renderToString,
        resolve: (name) => require(`./Pages/${name}`),
        setup({ app, props, plugin }) {
            const Ziggy = {
                // Pull the Ziggy config off of the props.
                ...props.initialPage.props.ziggy,
                // Build the location, since there is
                // no window.location in Node.
                location: new URL(props.initialPage.props.ziggy.url),
            };
            return createSSRApp({
                render: () => h(app, props),
            })
                .use(plugin)
                .mixin({
                    methods: {
                        route: (name, params, absolute, config = Ziggy) =>
                            route(name, params, absolute, config),
                    },
                });
        },
    })
);
