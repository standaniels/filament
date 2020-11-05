<?php

use Filament\Features;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of the Filament application. This value is used 
    | when the package needs to place the application's name in a notification 
    | or any other location as required by the package.
    |
    */

    'name' => env('FILAMENT_NAME', 'Filament'),

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | By default all of Filament's features are enabled. You may enable 
    | or disable features as needed by your application.
    |
    */

    'features' => [
        Features::registration(),
        Features::resourceModels()
    ],

    'models' => [

        'user' => config('auth.providers.users.model'),
    
    ],

    'prefix' => [

        /*
        |--------------------------------------------------------------------------
        | Route Prefix
        |--------------------------------------------------------------------------
        |
        */

        'route' => 'filament',

        /*
        |--------------------------------------------------------------------------
        | Component Prefix
        |--------------------------------------------------------------------------
        |
        | If set with the default "filament", for example, 
        | you can reference components like:
        |
        | <x-filament-alert />
        | <x-filament::input />
        |
        */

        'component' => 'filament',
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    |
    | Navigations used by Filament.
    |
    */

    'nav' => [

        'dashboard' => [
            'path' => 'filament.dashboard', // string or named route
            'active' => 'filament.dashboard', // string or named route (may also be an array @link https://github.com/dwightwatson/active)
            'label' => 'Dashboard',
            'icon' => 'heroicon-o-home', // optional icon name (Blade UI Kit @link https://github.com/blade-ui-kit/blade-heroicons)
            'sort' => -9999, // sort order used by the navigation
            'hideFromNav' => false,
        ],

        'users' => [
            'path' => 'filament.users.index', // string or named route
            'active' => 'filament.users.*', // string or named route (may also be an array @link https://github.com/dwightwatson/active)
            'label' => 'Users',
            'icon' => 'heroicon-o-users', // optional icon name (Blade UI Kit @link https://github.com/blade-ui-kit/blade-heroicons)
            'sort' => 9999, // sort order used by the navigation
            'hideFromNav' => false,
        ],
    
    ],

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all class-based components use by Filament.
    | You may override these components for customization in your own app.
    |
    */

    'components' => [
        'nav' => Filament\View\Components\Nav::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all the required Livewire components used by Filament. 
    | You may override these components for customization in your own app.
    |
    */

    'livewire' => [
        'login' => Filament\Http\Livewire\Auth\Login::class,
        'forgot-password' => Filament\Http\Livewire\Auth\ForgotPassword::class,
        'reset-password' => Filament\Http\Livewire\Auth\ResetPassword::class,
        'register' => Filament\Http\Livewire\Auth\Register::class,
        'users' => Filament\Http\Livewire\Users\Index::class,
        'logout' => Filament\Http\Livewire\Auth\Logout::class,
        'dashboard' => Filament\Http\Livewire\Dashboard::class,
    ],

];
