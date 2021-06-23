@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
    <div class="col-lg-3 col-md-4">
    Id - {{ $team->id }}<br>
    Name - {{ $team->name }}<br>
    </div>
        <div class="col-lg-3 col-md-4">
    <a href="/team/{{$team->id}}/edit" class="btn btn-success"> Edit</a>
    <form action="/team/{{$team->id}}/delete" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="data">
        <input type="submit" class="btn btn-success" value="Delete" >
    </form>
    </div>
    </div>
@endsection
