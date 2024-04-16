<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function getArticlesForMainPage(Request $request) { // Запрос для получения трех новостей на главную страницу
        $articles = Article::latest()->take(3)->get(); 
        return response()->json($articles);
    }
}
