<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update-role', $role->id)}}" method="post">
    @csrf
    @method('PUT')
        <label>Name</label>
        <input name="name" value="{{$role->name}}">
        <button type="submit">Submit</button>
                
    </form>
</body>
</html>