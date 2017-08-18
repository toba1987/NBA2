<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class NewsController extends Controller
{
    public function index()
    {
    	$news = News::with('user')->latest()->paginate(6);

    	return view('news.index',['news'=>$news]);
    }

    public function show($news_id)
    {
    	$singleNews = News::find($news_id);

    	return view('news.show',['singleNews' => $singleNews]);
    }
}
