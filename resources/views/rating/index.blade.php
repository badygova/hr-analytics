@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Rating <a href="/rating/create" class="btn btn-success"> + Create</a></div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Date</th>
                                <th>Author</th>
                                <th>Employee</th>
                                <th>Team</th>
                                <th>Period</th>
                                <th>Criterion</th>
                                <th>Rating</th>
                                <th>Comment</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ratings as $rating)
                                <tr>
                                    <td><a href="/rating/{{ $rating->id }}">{{ $rating->id }}</a></td>
                                    <td>{{ $rating->created_at }}</td>
                                    <td>{{ $rating->user->name }}</td>
                                    <td>{{ $rating->employee->name }}</td>
                                    <td>{{ $rating->employee->team->name }}</td>
                                    <td>{{ $rating->period }}</td>
                                    <td>{{ $rating->criterion }}</td>
                                    <td>{{ $rating->rating }}</td>
                                    <td>{{ $rating->comment }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href = "/ratings/export"> <button class = "btn btn-success" > Download Excel xlsx </button> </a>
                </div>
            </div>
        </div>
    </div>
@endsection
