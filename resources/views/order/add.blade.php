<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add-order')}}" method="post">
    @csrf
        <label>Price</label>
        <input name="price">
        <label>Tax</label>
        <input name="tax">
        <label>Subtotal</label>
            <input name='subtotal'>
            <label>Quantity</label>
            <input name="quantity">
        <button type="submit">Submit</button>
                
    </form>
</body>
</html>