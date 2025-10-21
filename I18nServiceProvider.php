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
        // Translations for Zaimea Global
        $this->loadTranslationsFrom(__DIR__.'/Global', '@i18n-global');
        // Translations for Zaimea Groups
        $this->loadTranslationsFrom(__DIR__.'/Groups', '@i18n-groups');
        // Translations for Zaimea Accounts-1s100
        $this->loadTranslationsFrom(__DIR__.'/Accounts', '@i18n-accounts');
        // Translations for Zaimea Docs
        $this->loadTranslationsFrom(__DIR__.'/Docs', '@i18n-docs');
        // Translations for Zaimea Website
        $this->loadTranslationsFrom(__DIR__.'/Zaimea', '@i18n-zaimea');
    }
}
