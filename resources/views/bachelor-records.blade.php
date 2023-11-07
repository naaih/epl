@extends('layouts.app')

@section('content')
<div class="container text-center mb-3 mt-3">
    <h1>
        BSc Modules
    </h1>
</div>

<div class="container mb-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Module Name</th>
                <th scope="col">Qualification</th>
            </tr>
        </thead>


        <tbody>
            @foreach($showBachData as $showBachDatas)
            <tr>
                <td>{{$showBachDatas->id}}</td>
                <td>{{$showBachDatas->module_name}}</td>
                <td>{{$showBachDatas->qualification}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


