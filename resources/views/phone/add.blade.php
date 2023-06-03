<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Adding the phone --}}
    <form method="post" action="{{route('create-phone')}}">
    @csrf
    <label>Title</label>
    <input name="title">
   <label>Category Id : </label>
   <input name="category_id">
    <label>Price</label>
    <input name="price">
    <label>Description</label>
    <input name="description">
    <label>Image</label>
    <input name="image">
    <button>Add Item</button>
</form>
   
</body>
</html>