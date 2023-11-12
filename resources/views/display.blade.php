@extends('layouts.app')

@section('content')
<div class="container text-center mb-3 mt-3">
    <h1>
        Indiviual Student Record
    </h1>
</div>

<div class="container mb-5 mt-5">
    <ul>
        <li>
            <h3>Name:</h3>
            <p>{{$showData->name}}</p>
            <h3>Student ID:</h3>
            <p>{{$showData->student_id}}</p>
            <h3>Gender:</h3>
            <p>{{$showData->gender}}</p>
            <h3>Email:</h3>
            <p>{{$showData->email}}</p> 
            <h3>Module:</h3>
            <p>{{$showData->module_taken}}</p>       
        </li>
    </ul>
</div>
@endsection