<?php

namespace Hexters\Ladmin\Plugin\PublicStorage;

use Illuminate\Support\ServiceProvider;

class LadminPublicStoragePluginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        
        $this->mergeConfigFrom(
            __DIR__ . '/../config/ladmin_public_storage_plugin.php', 'ladmin_public_storage_plugin'
        );

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {

        /**
         * Publis
         * php artisan vendor:publish --tag=public-storage-plugin
         */
        $this->publishes([
            __DIR__ . '/../config/ladmin_public_storage_plugin.php' => config_path('ladmin_public_storage_plugin.php'),
        ], 'public-storage-plugin');


        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'storage');

    }
}
