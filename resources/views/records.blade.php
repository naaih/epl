<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPL Updated</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .w-5 {
            display: none;
        }
    </style>
</head>

<body>
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
                    {{--<th scope="col">Updated At</th> --}}
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
                    {{-- <td class=">{{$showData->update_at}}</td> --}}
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    
    {{-- pagination --}}
    <div class="container">
        <ul class="pagination justify-content-center">
            {{ $showData->links() }}
        </ul>
    </div>
    
   <div class="container text-center mb-5 mt-5">
    <a class="btn btn-primary" href="http://localhost:8000">Go back</a>
   </div>

</body>

</html>