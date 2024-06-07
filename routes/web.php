<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');

    });


//    Route::get('/', function () {
//    $tags = Tag::factory()->count(10)->make();
//    dd($tags->toArray());
//        $tags=Tag::factory()->count(10)->create();
//        dd($tags->toArray());
//    });
