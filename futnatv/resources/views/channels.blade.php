@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">

    <div class="row mt-3">
        <div class="col-12">
            <h1>Channels - FutNaTV</h1>
            <a href="{{ route('channels-create') }}" class="btn btn-success">New</a>
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
                @foreach ($channels as $channel)
                    <tr>
                        <td>{{$channel->id}}</td>
                        <td>{{$channel->name}}</td>
                        <td>
                            <form action="{{route("channels-destroy", ["id" => $channel->id ]) }}" method="POST">
                                {{ method_field("DELETE") }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{route("channels-edit", ["id" => $channel->id ]) }}" class="btn btn-info">Edit</a>
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
