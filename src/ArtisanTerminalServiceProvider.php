<?php

namespace s1kopath\ArtisanTerminal;

use Illuminate\Support\ServiceProvider;

class ArtisanTerminalServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register package-specific bindings, if needed
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'artisan-terminal');

        // Publish assets (if needed)
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/artisan-terminal'),
        ], 'views');
    }
}
