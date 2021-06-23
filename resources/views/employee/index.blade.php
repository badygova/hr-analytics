@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Employee <a href="/employee/create" class="btn btn-success"> + Create</a></div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Team</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td><a href="/employee/{{ $employee->id }}">{{ $employee->id }}</a></td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->team->name }}</td>
                                    <!--<td style="text-align:right;">
                                        <a href="/node/{{ $employee->id }}" class="btn btn-info">View</a>
                                        <a href="/node/{{ $employee->id }}/edit" class="btn btn-success">Edit</a>
                                        <a href="/node/{{ $employee->id }}/destroy" class="btn btn-danger">Dellete</a>
                                    </td>-->
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href = "/employees/export"> <button class = "btn btn-success" > Download Excel xlsx </button> </a>

                </div>
            </div>
        </div>
    </div>
@endsection
