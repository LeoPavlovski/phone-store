<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit the user</title>
</head>
<body>
    {{-- We awnt to edit the user here (dispaly the input and the label --}}
    <form action="{{route('update-user', $user->id)}}" method="post">
    @csrf
    @method("PUT")
    <label>Name</label> 
        <input name="name" value={{$user->name}}>
    <label>Email</label>
    <input name="email" value={{$user->email}}>
    <label>Role_id</label>
    <input name="role_id" value={{$user->role_id}}>
    <label>New Password</label>
    <input name="password">
    <button>Edit</button>
    </form>
    

</body>
</html>