@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Channels - FutNaTV</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            @include('includes.errors')
            @if ($channel->id)
            <form action="{{ route('channels-update', [ 'id' => $channel->id ]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field("PUT") }}
            @else
            <form action="{{ route('channels-store') }}" method="POST" enctype="multipart/form-data">
            @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name of Channel" value="{{ $channel->name }}">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>

@endsection
