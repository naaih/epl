@extends('layouts.app')

@section('content')
<div class="container text-center mb-3 mt-3">
    <h1>
        MSc Modules
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
            @foreach($showMasterData as $showMasterDatas)
            <tr>
                <td>{{$showMasterDatas->id}}</td>
                <td>{{$showMasterDatas->module_name}}</td>
                <td>{{$showMasterDatas->qualification}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection