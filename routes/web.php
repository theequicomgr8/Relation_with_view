<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

//hasOne
Route::get('/has-one', [StudentController::class, 'hasOne']);
//hasMany
Route::get('/has-many',[UserController::class,'hasMany']);

//manyToMany
Route::get('/many-to-many',[UserController::class,'manyToMany']);

//hasOneTrough
Route::get('/has-one-through',[UserController::class,'hasOneThrough']);
