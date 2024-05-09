<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try {
            $site_settings = Setting::first();
            View::share(['siteSettings' => $site_settings]);
        } catch (QueryException $e) {
            // Log the error or handle it in some other way
            // For now, let's set a default value for siteSettings
            $site_settings = new Setting(); // Assuming Setting model has default values
            View::share(['siteSettings' => $site_settings]);
        }
    }
}
