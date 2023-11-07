@extends('layouts.app')

@section('content')
<div class="container text-center mb-5 mt-5">
    <h1>Student Records</h1>
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
            @foreach($showData as $showDatas)
            <tr>
                <td>{{$showDatas->id}}</td>
                <td>{{$showDatas->student_id}}</td>
                <td>{{$showDatas->gender}}</td>
                <td>{{$showDatas->name}}</td>
                <td>{{$showDatas->email}}</td>
                <td>{{$showDatas->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
