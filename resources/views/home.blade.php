@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                        <a href="/team">Teams</a><br>
                        <a href="/employee">Employees</a><br>
                        <a href="/rating">Rating</a><br>
                        <a href="/reports">Reports</a><br>
                        <a href="/progress">Progress</a><br>
                        <a href="/attrition">Attrition</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
