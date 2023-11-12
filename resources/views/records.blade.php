@extends('layouts.app')

@section('content')
<div class="container text-center mb-3 mt-3">
    <h1>
        Student Records
    </h1>
</div>

<div class="container mb-5">
    <table class="table">
        <thead>
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Student ID</td>
                <td scope="col">Gender</td>
                <td scope="col">Name</td>
                <td scope="col">Email</td>
                <td scope="col">Module</td>
                <td scope="col">Created At</td>
            </tr>
        </thead>


        <tbody>
            @foreach($showData as $showDatas)
            <tr>
                <td>{{$showDatas->id}}</td>
                <td>{{$showDatas->student_id}}</td>
                <td>{{$showDatas->gender}}</td>
                <td><a class="displayLink" href="{{ route('display', $showDatas->id) }}">{{$showDatas->name}}</a></td>
                <td>{{$showDatas->email}}</td>
                <td>{{$showDatas->module_taken}}</td>
                <td>{{$showDatas->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


{{-- <a href="{{ route('display', $showDatas->id) }}"> --}}