<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Get back the information about the one item --}}
    @foreach($orders as $order)
    <div>
        <h3>Information about order: {{ $order->order_id }}</h3>
        <p>Order ID: {{ $order->order_id }}</p>
        <p>User ID: {{ $order->user_id }}</p>
        <p>Phone ID: {{ $order->phone_id }}</p>
        <p>Tax: {{ $order->tax }}</p>
        <p>Price: {{ $order->price }}</p>
        <p>Subtotal: {{ $order->subtotal }}</p>
    </div>
@endforeach
    <h4>Go Back To Orders</h4>
    <form method="get" action="{{route('list-orders')}}">
    @csrf
    <button>Back</button>
    </form>
    
</body>
</html>