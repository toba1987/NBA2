@extends('layouts.master')

@section('content')
    @foreach($news as $singleNews)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/news/{{ $singleNews->id }}">{{ $singleNews->title }}</a></h2>
            <p class="blog-post-meta">{{ $singleNews->created_at->toFormattedDateString() }} by 
            <a href="#">
                {{ $singleNews->user->name }}
            </a></p>

            <p>{{ $singleNews->content }}</p>
        </div><!-- /.blog-post -->

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}" href="{{ $news->previousPageUrl() }}">
        Previus
        </a>

        <a class="btn btn-outline-{{ $news->hasMorePages() == 1 ? 'primary' : 'primary' }}" href="{{ $news->nextPageUrl() }}">Next</a>
    </nav>

@endsection

