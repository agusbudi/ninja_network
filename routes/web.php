<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//setting route
Route::get('/ninjas', function(){
    $ninjas = [
        ["id" => "1", "name" => "Naruto", "skill" => "Ninjutsu"],
        ["id" => "2", "name" => "Metal Lee", "skill" => "Taijutsu"],
        ["id" => "3", "name" => "Sasuke", "skill" => "Genjutsu"],
        ["id" => "4", "name" => "Orochimaru", "skill" => "Senjutsu"]
    ];

    return view('ninjas.index', ["greeting" => "Hello Ninja", "ninjas" => $ninjas]);
});

//wildcard route
Route::get('/ninjas/{id}', function($id){

    return view('ninjas.show', ["id" => $id]);
});