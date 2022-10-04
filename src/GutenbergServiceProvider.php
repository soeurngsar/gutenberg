<?php

namespace SoeurngSar\Gutenberg;

use Illuminate\Support\ServiceProvider;

class GutenbergServiceProvider extends ServiceProvider
{
    public $viewPath = 'views/vendor/soeurngsar/gutenberg';
    public $viewNamespace = 'gutenberg';

    public function boot()
    {
        $this->publishes([__DIR__.'/resources/views' => resource_path($this->viewPath)], 'views');

        $customViewsPath = resource_path($this->viewPath);

        if (file_exists($customViewsPath)) {
            $this->loadViewsFrom($customViewsPath, $this->viewNamespace);
        } else {
            $this->loadViewsFrom(__DIR__.'/resources/views', $this->viewNamespace);
        }
    }
}
