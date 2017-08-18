@extends('layouts.master')

@section('content')

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="#">{{ $singleNews->title }}</a></h2>
            <p>{{ $singleNews->content }}</p>
        </div><!-- /.blog-post -->
        <hr>
    <p class="blog-post-meta"><strong>Name: </strong>{{ $singleNews->user->name }}</p>
    <p class="blog-post-meta"><strong>Email: </strong>{{ $singleNews->user->email }}</p>
 
   @if (count($singleNews->teams))
       <ul>
            @foreach ($singleNews->teams as $team)
               <li>
                   <a href="/news/teams/{{ $team->name }}">
                       {{ $team->name }}
                    </a>
               </li>
            @endforeach
        </ul>
   @endif

@endsection