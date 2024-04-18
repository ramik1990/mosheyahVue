<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//====================Основные запросы==========================
Route::get('/', ['App\Http\Controllers\Controller','getMainPage'])->name('mainPage');


//====================ОТЗЫВЫ==========================
Route::post('/reviewForMainPage', ['App\Http\Controllers\ReviewController','getReviewForMainPage'])->name('getReviewForMainPage'); //запрос для получения отзывов на главную страницу

//====================НОВОСТИ==========================
Route::post('/articlesForMainPage', ['App\Http\Controllers\ArticleController','getArticlesForMainPage'])->name('getArticlesForMainPage'); //запрос для получения новостей на главную страницу
Route::post('/getAllArticles', ['App\Http\Controllers\ArticleController','getAllArticles'])->name('getAllArticles'); //запрос для получения всех новостей


