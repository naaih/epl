@extends('layouts.app')

@section('content')
    <div class="container text-center mb-3 mt-3">
        <h1>
            Indiviual Student Record
        </h1>
    </div>

    <div class="container mt-5">
        <ul>
            <li>
                <h4>Name:</h4>
                <p>{{ $showData->name }}</p>
                <h4>Student ID:</h4>
                <p>{{ $showData->student_id }}</p>
                <h4>Gender:</h4>
                <p>{{ $showData->gender }}</p>
                <h4>Email:</h4>
                <p>{{ $showData->email }}</p>
                <h4>Module:</h4>
                <p>{{ $showData->module_taken }}</p>
            </li>
        </ul>

        {{-- <div class="container">
            <h5>Name:</h5>
            <li>{{ $showData->name }}</li>

            <h5>Student ID:</h5>
            <li>{{ $showData->student_id }}</li>

            <h5>Gender:</h5>
            <li>{{ $showData->gender }}</li>

            <h5>Email:</h5>
            <li>{{ $showData->email }}</li>

            <h5>Module:</h5>
            <li>{{ $showData->module_taken }}</li>
        </div> --}}

    </div>
@endsection
