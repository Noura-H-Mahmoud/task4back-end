<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      <style>
      *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family:'Montserrat', sans-serif;
          }
          .table{
              width: 100%;
              height: 100vh;
              display: flex;
              flex-direction: column;
              align-items: center;
              gap: 3rem;
              padding-top: 17%;
              background-color: #ebece3;
              
          }
          h1{
              font-size: 63px;
              color: #ffa62b;
          }
          table{
              border-collapse: collapse;
              width: 70%;
              color: #787872;
          }
          th, td {
              border: 1px solid #cccccc;
              padding: 8px;
              text-align: center;
          }
          .delete{
              background-color: #ffa62b;
              font-size: 21px;
              padding: .5rem;
          }
          .edit{
              background-color: #ffa62b;
              font-size: 21px;
              padding: 1rem;
          }
          .delete{
              text-decoration: none;
              color: #ebece3;
              border: none;
              padding: 1rem;
          }
          .edit a{
              text-decoration: none;
              color: #ebece3;
          }
          .form{
            background-color: #ffa62b;
              padding: 0 0;
          }
          .create {
             text-decoration: none;
             color: #ebece3;
             background-color: #787872;
             padding: 1rem;
          }
          .create:hover{
            color: #787872;
            background-color: #ffa62b;            
          }
      </style>
</head>
<body>
    <section  class="table">
        <h1>Employees Registry</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    @if(Auth::user()->isAdmin())
                    <th>Delete</th>
                    <th>Edit</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                
                    @php
                    $i=0;
                    @endphp
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->admin}}</td>
                            <td>{{$employee->created_at}}</td>
                            <td>{{$employee->updated_at}}</td>
                            @if(Auth::user()->isAdmin())
                            <td class="form">
                                <form action="{{ route('delete',$employee->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="delete" type="submit">Delete</button>
                            </form>
                            </td>
                            <td  class="edit">
                                <a href="{{route('edit',$employee->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endif
                @endforeach 
                @if(Auth::user()->isAdmin())
                <a class="create" href="{{route('create')}}">Create New Employee</a>
                @endif
            </tbody>          
    </section>
</body>
</html>