<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Show the current item --}}
    <div>
        <h1>Displaying the item</h1>
        <p>UserName</p>
        <h3>{{$user->name}}</h3>
        <p>Email</p>
        <h3>{{$user->email}}</h3>
        <p>Role Id</p>
        <h3>{{$user->role_id}}</h3>
    </div>
    <form method="get" action={{route('list-users')}}>
        <h3>Go back</h3>
    <button>List Users</button>
    </form>
    
</body>
</html>