<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family:'Montserrat', sans-serif;
        }
        .The-employees{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3rem;
            padding: 5rem;
        }
        h1{
            font-size: 47px;
            letter-spacing: .1rem;
            color: #fca311;
        }
        form{
            width:50%;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            
        }
        input,select{
            border: none;
            border-bottom: 1px solid #acbbc6;
            padding: 1.3rem;
            font-size: 23px;
            color: #fca311;
        }
        input:hover{
            border: none;
            border-bottom: 1px solid  #fca311;
        }
        label{
            color: #8d9498;
            font-size: 30px;
        }
        option{
            margin: auto;
        }
        select {
            margin: 0 auto; 
            width: 50%;
        }
        .btn{
            width: 21%;
            padding: 1.5rem;
            font-size: 30px;
            color: #fcfdfe;
            background-color: #2f5a9d;
            border-radius: .5rem;
            border: none;
        }
    </style>    
</head>
<body>
    <section class="The-employees">
        <h1>Create New Employee</h1>
        <form action="{{route('store')}}" method="POST" id="order-form" >
        @csrf
            <label for="order-name">Name</label>
            <input type="text" name="name" id="order-name"autofocus>
            <label for="order-email">Email</label>
            <input type="email" name="email" id="order-email">
            <label for="order-password">Password</label>
            <input type="text" name="password" id="order-password"> 
            <label for="order-admin">Admin</label>
            <input type="text" name="admin" id="order-admin">
            <button class="btn" type="submit" name="save" >Add</button>
        </form> 
    </section>            
</body>
</html>