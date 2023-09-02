<?php

namespace WebZow;

use Illuminate\Support\ServiceProvider;

class WebZowServiceProvider extends ServiceProvider {
    
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'webzow');
    }
}
