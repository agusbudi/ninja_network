<?php
//attention: read top-down according to row list

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//setting route
Route::get('/ninjas', function(){
    $ninjas = [
        ["id" => "1", "name" => "Naruto", "skill" => "Ninjutsu", "level" => 9],
        ["id" => "2", "name" => "Metal Lee", "skill" => "Taijutsu", "level" => 8],
        ["id" => "3", "name" => "Sasuke", "skill" => "Genjutsu", "level" => 7],
        ["id" => "4", "name" => "Orochimaru", "skill" => "Senjutsu", "level" => 6]
    ];

    return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function(){
    return view('ninjas.create');
});

//wildcard route
Route::get('/ninjas/{id}', function($id){
    return view('ninjas.show', ["id" => $id]);
});