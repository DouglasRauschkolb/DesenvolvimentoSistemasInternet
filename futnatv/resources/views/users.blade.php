@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">

    <div class="row mt-3">
        <div class="col-12">
            <h1>Users - FutNaTV</h1>
            <a href="{{ route('users-create') }}" class="btn btn-success">New</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Açoes</td>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form action="{{route("users-destroy", ["id" => $user->id ]) }}" method="POST">
                                {{ method_field("DELETE") }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{route("users-edit", ["id" => $user->id ]) }}" class="btn btn-info">Edit</a>
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
