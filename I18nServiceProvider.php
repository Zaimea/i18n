<?php

declare(strict_types=1);

namespace Zaimea\I18n;

use Illuminate\Support\ServiceProvider;

class I18nServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Translations for Zaimea Groups
        $this->loadTranslationsFrom(__DIR__.'/Groups', '@i18n-groups');
        // Translations for Zaimea Gateway-1s100
        $this->loadTranslationsFrom(__DIR__.'/Gateway', '@i18n-gateway');
    }
}
