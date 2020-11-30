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
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="summary">Summary</label>
                    <textarea class="form-control" id="summary" rows="3" name="summary" placeholder="Summary" >{{ $post->summary }}</textarea>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" id="text" rows="10" name="text" placeholder="Text" >{{ $post->text }}</textarea>
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
                <h4>Active</h4>
                <div class="custom-control custom-switch mb-3">
                    @if ($post->active)
                        <input type="checkbox" class="custom-control-input" name="active" id="active" checked>
                    @else
                        <input type="checkbox" class="custom-control-input" name="active" id="active" >
                    @endif
                    <label class="custom-control-label" for="active" ></label>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>

@endsection
