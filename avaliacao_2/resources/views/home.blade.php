@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">
    <div class="row mt-5">
        <div class="text-center mb-3">
            <h1 class="text-center mb-3">Ultimas postagens</h1>
        </div>
    </div>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-header"> {{ $post->title }} </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->summary }}</h5>
                <p class="card-text">{{ $post->text }}</p>
                @foreach ($post->tags()->get() as $tag )
                    <span class="badge badge-pill badge-dark">{{ $tag->name }}</span>
                @endforeach
                <p class="card-text"><small class="text-muted">{{ $post->formatted_date }}</small></p>
            </div>
        </div>
    @endforeach

</div>
@endsection
