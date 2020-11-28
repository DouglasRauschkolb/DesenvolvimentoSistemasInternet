@extends('includes.layout')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <h1 class="text-center mb-2">FutNaTV - Login</h1>
            <form action="{{ route('login') }}" method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection
