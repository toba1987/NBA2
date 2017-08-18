@extends('layouts.master')

@section('content')

    <h2>Create News</h2>

    <hr>

    <form method="POST" action="/news/store" >

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        @if(count($name))
            <div class="form-group">
                <label for="teams">Teams:</label><br>
                @foreach($name as $singleName)
                        <input type="checkbox"  id="teams" name="teams[]" value="{{  $singleName->id }}">{{  $singleName->name }}<br>
                @endforeach      
            </div>
        @endif

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif
@endsection