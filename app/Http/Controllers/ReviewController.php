<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;


class ReviewController extends Controller
{
    public function getReviewForMainPage(Request $request){           //запрос для получения отзывов на главную страницу
        $reviews = Review::latest()->take(3)->get();
        return response()->json($reviews); 
    }
}
