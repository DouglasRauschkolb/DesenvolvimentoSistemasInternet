@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">

    <div class="row mt-3">
        <div class="col-12">
            <h1>Posts - Avaliação 2</h1>
            <a href="{{ route('posts-create') }}" class="btn btn-success">New</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Date</td>
                    <td>Tags</td>
                    <td>Actions</td>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->post_date}}</td>
                        <td>
                            <ul>
                                @foreach ($post->tags()->get() as $tag)
                                    <li>{{ $tag->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <form action="{{route("posts-destroy", ["id" => $post->id ]) }}" method="POST">
                                {{ method_field("DELETE") }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{route("posts-edit", ["id" => $post->id ]) }}" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>

@endsection
