import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/linearicons.css",
                "resources/css/bootstrap.css",
                "resources/css/magnific-popup.css",
                "resources/css/nice-select.css",
                "resources/css/main.css",
                "resources/css/jquerysctipttop.css",
                "resources/css/slick.css",
                "resources/css/card.css",
                "resources/js/app.js",
                "resources/js/hoverIntent.js",
                "resources/js/main.js",
                "resources/js/bootstrap.js",
                "resources/js/mail-script.js",
                "resources/js/slick.js",
                "resources/js/card.js",
                "resources/js/superfish.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
