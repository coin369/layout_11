import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import inject from '@rollup/plugin-inject';

    
export default defineConfig({
    plugins: [
        laravel(
            {
                input: [

                    'resources/assets/css/app.scss', 'resources/assets/js/app.js',

                    'resources/assets/css/backend.scss', 'resources/assets/js/backend.js'
                    ],
                refresh: true,
            }

        ),

    ],
    server: { 
        hmr: {
            host: 'localhost',
        },
    }, 
    build: {
        commonjsOptions: {
             transformMixedEsModules: true
         },
        //  rollupOptions: {
        //       output: {
        //         // expose jQuery as a global variable
        //         globals: {
               
        //           jquery: 'window.jQuery',
        //         }
        //       }
        //     }
   }
});
