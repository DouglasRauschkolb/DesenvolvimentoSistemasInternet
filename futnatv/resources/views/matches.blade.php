@extends('includes.layout')

@section('content')
@include('includes.menu')

<div class="container">

    <div class="row mt-3">
        <div class="col-12">
            <h1>Matches - FutNaTV</h1>
            <a href="{{ route('matches-create') }}" class="btn btn-success">New</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Match</td>
                    <td>Date</td>
                    <td>Channels</td>
                    <td>Actions</td>
                </tr>
                @foreach ($matches as $match)
                    <tr>
                        <td>{{$match->id}}</td>
                        <td>{{$match->team1}} X {{$match->team2}}</td>
                        <td>{{$match->formatted_date}}</td>
                        <td>
                            <ul>
                                @foreach ($match->channels()->get() as $channel)
                                    <li>{{ $channel->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <form action="{{route("matches-destroy", ["id" => $match->id ]) }}" method="POST">
                                {{ method_field("DELETE") }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{route("matches-edit", ["id" => $match->id ]) }}" class="btn btn-info">Edit</a>
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
