@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Post - Avaliação 2</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            @include('includes.errors')
            @if ($post->id)
            <form action="{{ route('posts-update', [ 'id' => $post->id ]) }}" method="POST" >
            {{ method_field("PUT") }}
            @else
            <form action="{{ route('posts-store') }}" method="POST" >
            @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="post_date" name="post_date" value="{{ $post->post_date }}">
                </div>
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="name">Summary</label>
                    <input type="text" class="form-control" id="summary" name="summary" placeholder="Summary" value="{{ $post->summary }}">
                </div>
                <div class="form-group">
                    <label for="name">Text</label>
                    <input type="text" class="form-control" id="text" name="text" placeholder="Text" value="{{ $post->text }}">
                </div>
                <div class="form-group">
                    <h4>Tags</h4>
                    @foreach ($tags as $tag)
                        <div class="form-check form-check-inline">
                            @if ($post->tags->find($tag->id))
                                <input type="checkbox" class="form-check-input" name="tags[]" id="tags{{ $tag->id }}" value="{{ $tag->id }}" checked >
                            @else
                                <input type="checkbox" class="form-check-input" name="tags[]" id="tags{{ $tag->id }}" value="{{ $tag->id }}" >
                            @endif
                            <label for="tags{{ $tag->id }}" class="form-check-label">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="name">Active</label>
                    <input type="checkbox" class="form-control" id="active" name="active" placeholder="Active" value="{{ $post->active }}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>

@endsection
