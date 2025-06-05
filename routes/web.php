<?php

use Illuminate\Support\Facades\Route;


//F R O N T - P A G E S *****
Route::get('lingo/{locale}', 'FrontController@indexLingo');
Route::get('/', 'FrontController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about-me', 'FrontController@indexMe')->name('me');
Route::get('/my-mission', 'FrontController@indexMission')->name('mission');
Route::get('/education', 'FrontController@indexEducation')->name('education');
Route::get('/occupation', 'FrontController@indexOccupation')->name('occupation');
Route::get('/projects', 'FrontController@indexProject')->name('projects');
Route::get('/blog', 'FrontController@indexBlog')->name('blog');
Route::get('/contact', 'FrontController@create')->name('contact');
Route::post('/form', 'FrontController@store')->name('form');

// A D M I N - P A G E S  *****
Route::get('/admin', [\App\Http\Livewire\ShowAdmin::class, '__invoke'])
    ->name('admin')->middleware('auth');
Route::post('/gallery', [\App\Http\Livewire\AddPhoto::class, '__invoke'])
    ->name('gallery');
Route::post('/aud', [\App\Http\Livewire\AddAudio::class, '__invoke'])
    ->name('audio');
Route::post('/post', [\App\Http\Livewire\AddPost::class, '__invoke'])
    ->name('post');


Auth::routes();




