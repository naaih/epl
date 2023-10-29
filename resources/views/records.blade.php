<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPL Updated</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <style>
        .w-5 {
            display: none;
        }
    </style>
</head>

<body>

    <h1 class="text-center">Student Records</h1>
    <div class="container mt-10">
        <a href="http://localhost:8000">Go home</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Name</th>
                    <th scope="col"">Email</th>
                                    <th scope=" col">Created At</th>
                    {{--<th scope="col" class="px-6 py-4">Updated At</th> --}}
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
                    {{-- <td class="whitespace-nowrap px-6 py-4">{{$showData->update_at}}</td> --}}
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
     
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            {{ $showData->links() }}
          </li>
        </ul>
      </nav>
    
   

</body>

</html>