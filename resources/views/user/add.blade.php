<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- We want to add the item here --}}
    <form action="{{route('create-user')}}" method="post">
    @csrf
    <label>Name</label>
    <input name="name">
    <label>Email</label>
    <input name="email">
    <label>Role_id</label>
    <input name="role_id">
    <label>Password</label>
    <input name="password">
    <button>Add</button>
    </form>
    
</body>
</html>