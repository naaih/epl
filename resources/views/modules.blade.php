@extends('layouts.app')

@section('content')
<div class="container text-center mb-5 mt-5">
  <h1>
    Modules Records
  </h1>
</div>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Module Name</th>
        <th scope="col">Qualification</th>
      </tr>
    </thead>


    <tbody>
      @foreach($moduleData as $moduleDatas)
      <tr>
        <td>{{$moduleDatas->id}}</td>
        <td>{{$moduleDatas->module_name}}</td>
        <td>{{$moduleDatas->qualification}}</td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>
@endsection