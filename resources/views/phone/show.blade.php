<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Showing the information here --}}
    <div>You Clicked on item with the id : {{$phone->id}}
    <p>Information about the item : </p>
        <h3>Title:</h3>
    <h2>{{$phone->title}}</h2>
    <h3>Price:</h3>
    <h2>{{$phone->price}}</h2>
    <h3>Description:</h3>
    <h2>{{$phone->description}}</h2>
    <h3>Image:</h3>
    <h2>{{$phone->image}}</h2>

    </div>
    
</body>
</html>