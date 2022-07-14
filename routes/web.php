<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/',function(){    
    $data = [
        [
            'skill'=>'Laravel',
            'val'=>'85',
            'icon'=>'icons/laravel.png'
        ],
        [
            'skill'=>'Livewire',
            'val'=>'60',
            'icon'=>'icons/livewire.png'
        ],
        [
            'skill'=>'AlpineJs',
            'val'=>'50',
            'icon'=>'icons/alpinejs.png'
        ],
        [
            'skill'=>'TailwindCss',
            'val'=>'70',
            'icon'=>'icons/tailwindcss.png'
        ],
        [
            'skill'=>'JavaScript ES6',
            'val'=>'50',
            'icon'=>'icons/jses6.png'
        ],
        [
            'skill'=>'Php',
            'val'=>'85',
            'icon'=>'icons/php.png'
        ],
        [
            'skill'=>'ORM Eloquent',
            'val'=>'80',
            'icon'=>'icons/eloquent.png'
        ],
        [
            'skill'=>'Oracle, SqlServer y MariaDB',
            'val'=>'60',
            'icon'=>'icons/bd.png'
        ],
        [
            'skill'=>'Apache',
            'val'=>'70',
            'icon'=>'icons/apache.png'
        ]
    ];
    return view('welcome',['data'=>collect($data)]);
});
Route::get('/home',[HomeController::class,'index'])->name('home');




