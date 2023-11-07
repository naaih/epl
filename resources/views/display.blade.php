@extends('layouts.app')

@section('content')
<div class="container text-center mb-5 mt-5">
    <h1>
        Student Record
    </h1>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Student ID</th>
                <th scope="col">Gender</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>


        <tbody>
            <tr>
                <td>{{$showData->id}}</td>
                <td>{{$showData->student_id}}</td>
                <td>{{$showData->gender}}</td>
                <td>{{$showData->name}}</td>
                <td>{{$showData->email}}</td>
                <td>{{$showData->created_at}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
