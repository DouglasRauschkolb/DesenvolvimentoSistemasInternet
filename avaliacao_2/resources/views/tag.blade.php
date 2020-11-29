@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Tag - Avaliação 2 </h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            @include('includes.errors')
            @if ($tag->id)
            <form action="{{ route('tags-update', [ 'id' => $tag->id ]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field("PUT") }}
            @else
            <form action="{{ route('tags-store') }}" method="POST" enctype="multipart/form-data">
            @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name of Tag" value="{{ $tag->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>

@endsection
