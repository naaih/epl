@extends('layouts.app')

@section('content')
<div class="container text-center mb-3 mt-3">
    <h1>
        Indiviual Student Record
    </h1>
</div>

<div id="recordsCard" class="card" style="width: 30rem">
    <div class="card-body">
        <h5 class="recordsHeading">Name:</h5>
        <p class="card-title class="recordsHeading"">{{ $showData->name }}</p>
  
        <h5 class="recordsHeading">Gender:</h5>
        <p class="card-text">{{ $showData->gender }}</p>

        <h5 class="recordsHeading">Student ID:</h5>
        <p class="card-text">{{ $showData->student_id }}</p>

        <h5 class="recordsHeading">Email:</h5>
        <p class="card-text">{{ $showData->email }}</p>

        <h5 class="recordsHeading">Module Taken:</h5>
        <p class="card-text">{{ $showData->module_taken }}</p>
    </div>
</div>
@endsection