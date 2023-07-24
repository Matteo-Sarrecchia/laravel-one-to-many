@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3 bg-dark mt-3">
    <div class="container text-center py-5 rounded border border-black px-5 bg-light">

        <h1 class="display-5 fw-bold my-5">
            {{ $project -> title}}
        </h1>

        <div>
            {{ $project -> description}}
        </div>
        <div class="border rounded border-black d-flex justify-content-between my-5">
            <li class="list-unstyled p-3">Project Leader: {{ $project -> project_leader_name}}</li>
            <li class="list-unstyled p-3">People: {{ $project -> people}}</li>
            <li class="list-unstyled p-3">Date Start: {{ $project -> date_start}}</li>
            <li class="list-unstyled p-3">N° Day: {{ $project -> duration}}</li>
        </div>
    </div>
</div>

@endsection
