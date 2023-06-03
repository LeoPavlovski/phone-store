<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     {{-- We are going to add the item here, we are going to need one input and the label --}}
     <form method="post" action="{{route('update-phone', $phone->id)}}">
        @csrf
        @method("PUT")
        <label>title</label>
        <input name="title" value="{{$phone->title}}">
        <label>Price</label>
        <input name="price" value="{{$phone->price}}">
        <label>Description</label>
        <input name="description" value="{{$phone->description}}">
        <label>Category_id</label>
        <input name="category_id" value="{{$phone->category_id}}">
        <label>Image</label>
        <input type="file" name="image" value="{{$phone->image}}">
        <button>Update</button>
        </form>
</body>
</html>