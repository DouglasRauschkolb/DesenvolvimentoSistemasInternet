@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">

    <div class="row mt-3">
        <div class="col-12">
            <h1>Tags - Avaliação 2</h1>
            <a href="{{ route('tags-create') }}" class="btn btn-success">New</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Actions</td>
                </tr>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>
                            <form action="{{route("tags-destroy", ["id" => $tag->id ]) }}" method="POST">
                                {{ method_field("DELETE") }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{route("tags-edit", ["id" => $tag->id ]) }}" class="btn btn-info">Edit</a>
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
