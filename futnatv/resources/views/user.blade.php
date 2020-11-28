@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Users - FutNaTV</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            @include('includes.errors')
            @if ($user->id)
            <form action="{{ route('users-update', [ 'id' => $user->id ]) }}" method="POST">
            {{ method_field("PUT") }}
            @else
            <form action="{{ route('users-store') }}" method="POST">
            @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name of User" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail of User" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>

@endsection
