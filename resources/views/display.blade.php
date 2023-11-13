@extends('layouts.app')

@section('content')
    <div class="container text-center mb-3 mt-3">
        <h1>
            Indiviual Student Record
        </h1>
    </div>

    <div class="card" style="width: 18rem">
        <div class="card-body" ">
            <img class="card-img-top" src="./download.svg" alt="Card image cap">
            <h5 class="card-title">{{ $showData->name }}</h5>
            <li class="list-group-item">
                <p class="card-text">{{ $showData->gender }}</p>
            </li>
            <li class="list-group-item">
                <p class="card-text">{{ $showData->student_id }}</p>
            </li>
            <li class="list-group-item">
                <p class="card-text">{{ $showData->email }}</p>
            </li>
            <li class="list-group-item">
                <p class="card-text">{{ $showData->module_taken }}</p>
            </li>
        </div>
    </div>
@endsection
