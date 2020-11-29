@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">
    <div class="row mt-5">
        <div class="text-centar mb-2">
            <h1 class="text-center mb-2">Avaliação 2</h1>
            <p class="lead">Ultimas postagens</p>
        </div>
    </div>
    <div class="row mt-3">
        @foreach ($posts as $post)
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $post->title }} </h5>
                        <p class="card-text">{{ $post->post_date }}</p>
                        @foreach ($post->tags()->get() as $tag )
                            {{ $tag->name }}
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
