@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $team->name }}</h2>
    <p class="blog-post-meta"><strong>City: </strong>{{ $team->city }}</p>
    <p class="blog-post-meta"><strong>Adress: </strong>{{ $team->address }}</p>
    <p class="blog-post-meta"><strong>Email: </strong>{{ $team->email }}</p>

    <h3>Svi igraci: </h3>

    @foreach($team->players as $player)
        <li>
            <a href="/players/{{$player->id}}">{{ $player->first_name }} {{ $player->last_name }}</a>
        </li>
    @endforeach

    <hr>

    <h3>Comments </h3>

    @foreach($team->comments as $comment)
        <li>
            <strong>{{ $comment->user->name }}</strong>
            {{ $comment->content }} 
        </li>
    @endforeach


    <hr>



    <form method="POST" action="/comment/{{ $team->id }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


@endsection
