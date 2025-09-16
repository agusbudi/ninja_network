<?php
//attention: read top-down according to row list

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//setting route
Route::get('/ninjas', function(){
    $ninjas = [
        ["id" => "1", "name" => "Naruto", "expertise" => "Ninjutsu", "skill" => 9],
        ["id" => "2", "name" => "Metal Lee", "expertise" => "Taijutsu", "skill" => 8],
        ["id" => "3", "name" => "Sasuke", "expertise" => "Genjutsu", "skill" => 7],
        ["id" => "4", "name" => "Orochimaru", "expertise" => "Senjutsu", "skill" => 6]
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