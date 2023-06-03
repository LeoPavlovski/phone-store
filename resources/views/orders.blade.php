<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Phone ID</th>
                <th>Tax</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->phone_id }}</td>
                    <td>{{ $order->tax }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->subtotal }}</td>
                    <td>
                        <form action=" {{route('delete-record', $order->order_id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button>Delete</button>
                        </form>
                       
                    </td>
                    <td>
                        <form action="{{route('create-order')}}" method="get">
                            @csrf
                            <button>Create</button>
                            </form>
                    </td>
                    <td>
                        <form action="{{route('show-order', $order->order_id)}}" method="get">
                        @csrf
                        <button>Details</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>