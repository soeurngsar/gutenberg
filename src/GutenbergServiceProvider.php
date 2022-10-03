<?php

namespace SoeurngSar\Gutenberg;

use Illuminate\Support\ServiceProvider;

class GutenbergServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__.'/resources/views' => base_path('resources/views')], 'views');
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views/vendor/backpack/crud'), 'gutenberg');
    }
}
