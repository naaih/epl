@extends('layouts.app')

@section('content')
<div class="container text-center mb-3 mt-3">
    <h1>
        Student Records
    </h1>
</div>

{{-- 
<div class="container text-center mb-4 mt-4">
    <form action="search_data" method="GET">
        <input type="text" name="search">
        <button type="submit">Search</button>
    </form>
</div> --}}

<div class="container mb-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Student ID</th>
                <th scope="col">Gender</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Module</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>


        <tbody>
            @foreach($showData as $showDatas)
            <tr>
                <td>{{$showDatas->id}}</td>
                <td>{{$showDatas->student_id}}</td>
                <td>{{$showDatas->gender}}</td>
                <td>
                    <a 
                        class="displayLink" 
                        href="{{ route('display', $showDatas->id) }}">
                        {{$showDatas->name}}
                    </a>
                </td>
                <td>{{$showDatas->email}}</td>
                <td>{{$showDatas->module_taken}}</td>
                <td>{{$showDatas->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
