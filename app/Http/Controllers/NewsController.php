<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Team;


class NewsController extends Controller
{
    public function index()
    {
    	$news = News::with('user')->latest()->paginate(6);

    	return view('news.index',['news'=>$news]);
    }

    public function show($id)
    {
    	$singleNews = News::find($id);

    	return view('news.show',['singleNews' => $singleNews]);
    }

    public function create()
    {
        $name = Team::all();

        return view('news.create',compact('name'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
            'teams' => 'required|array', 
        ]);


        $news = new News;
        $news->title = request('title');
        $news->content = request('content');
        $news->user_id = auth()->user()->id; 

        $news->save();

        $news->teams()->attach(request('teams')); 

        session()->flash('news','Thank you for publishing article on www.nba.com');


        return redirect('/news');

    }
}
