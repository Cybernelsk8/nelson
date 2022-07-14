<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/',function(){    
    $data = [
        [
            'skill'=>'Laravel',
            'val'=>'85'
        ],
        [
            'skill'=>'Livewire',
            'val'=>'60'
        ],
        [
            'skill'=>'AlpineJs',
            'val'=>'50'
        ],
        [
            'skill'=>'TailwindCss',
            'val'=>'70'
        ],
        [
            'skill'=>'JavaScript ES6',
            'val'=>'50'
        ],
        [
            'skill'=>'Php',
            'val'=>'85'
        ],
        [
            'skill'=>'ORM Elocuent',
            'val'=>'80'
        ],
        [
            'skill'=>'Oracle, SqlServer y MariaDB',
            'val'=>'60'
        ],
        [
            'skill'=>'Apache',
            'val'=>'70'
        ]
    ];
    return view('welcome',['data'=>collect($data)]);
});
Route::get('/home',[HomeController::class,'index'])->name('home');




