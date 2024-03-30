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
                        </tr>
                    @endforeach 
            </tbody>          
    </section>
</body>
</html>