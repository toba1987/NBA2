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


@endsection
