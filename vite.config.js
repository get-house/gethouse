import fs from 'fs';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { homedir } from 'os';
import { resolve } from 'path';

let host = 'gethouse.test';

export default defineConfig({
    plugins: [
        laravel(['resources/js/app.js']),

        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),

        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        },

        {
            name: 'ziggy',
            enforce: 'post',
            handleHotUpdate({ server, file }) {
                if (file.includes('/routes/') && file.endsWith('.php')) {
                    exec(
                        'php artisan ziggy:generate',
                        (error, stdout) =>
                            error === null &&
                            console.log(`  > Ziggy routes generated!`)
                    );
                }
            },
        },
    ],

    server: detectServerConfig(host),
});

function detectServerConfig(host) {
    let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`);
    let certificatePath = resolve(
        homedir(),
        `.config/valet/Certificates/${host}.crt`
    );

    if (!fs.existsSync(keyPath)) {
        return {};
    }

    if (!fs.existsSync(certificatePath)) {
        return {};
    }

    return {
        hmr: { host },
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    };
}
