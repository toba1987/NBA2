@extends('layouts.master')

@section('content')


    <p class="blog-post-meta"><strong>Name: </strong>{{ $player->first_name }}</p>
    <p class="blog-post-meta"><strong>Last Name: </strong>{{ $player->last_name }}</p>
    <p class="blog-post-meta"><strong>Email: </strong>{{ $player->email }}</p>



@endsection
