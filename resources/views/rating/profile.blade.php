@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-lg-3 col-md-4">
    Id - {{ $rating->id }}<br>
    Date - {{ $rating->created_at }} <br>
    Author - {{ $rating->user->name }}<br>
    Employee - {{ $rating->employee->name }}<br>
    Team - {{ $rating->employee->team->name }}<br>
    Period - {{ $rating->period }}<br>
    Criterion - {{ $rating->criterion }}<br>
    Rating - {{ $rating->rating }}<br>
    Comment - {{ $rating->comment }}<br>
        </div>
        <div class="col-lg-3 col-md-4">
    <a href="/rating/{{$rating->id}}/edit" class="btn btn-success"> Edit</a>
    <form action="/rating/{{$rating->id}}/delete" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="data">
        <input type="submit" class="btn btn-success" value="Delete" >
    </form>
        </div>
    </div>
@endsection
