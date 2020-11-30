@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">

    <div class="row mt-3">
        <div class="col-12">
            <h1>Posts - Avaliação 2</h1>
            <a href="{{ route('posts-create') }}" class="btn btn-success mb-3">New</a>
        </div>
    </div>

    @foreach ($posts as $post)
        <div class="card mb-3">
            @if ($post->active)
                <div class="card-header bg-success font-weight-bold text-white " > {{ $post->title }} </div>
            @else
                <div class="card-header bg-danger font-weight-bold text-white " > {{ $post->title }} </div>
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $post->summary }}</h5>
                <p class="card-text">{{ $post->text }}</p>
                @foreach ($post->tags()->get() as $tag )
                    <span class="badge badge-pill badge-dark">{{ $tag->name }}</span>
                @endforeach
                <p class="card-text"><small class="text-muted">{{ $post->formatted_date }}</small></p>
                <form action="{{route("posts-destroy", ["id" => $post->id ]) }}" method="POST">
                    {{ method_field("DELETE") }}
                    {{ csrf_field() }}
                    <div class="btn-group">
                        <a href="{{route("posts-edit", ["id" => $post->id ]) }}" class="btn btn-info">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    @endforeach

</div>

@endsection
