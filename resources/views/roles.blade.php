<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Role ID</th>
                <th>Role Name</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <form action=" {{route('delete-role', $role->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button>Delete</button>
                        </form>
                    </td>
                     
                       
                    <td>
                        <form action="{{route('create-role')}}" method="get">
                            @csrf
                            <button>Create</button>
                            </form>
                    </td>
                     
                            <td>
                                <form action="{{route('edit-item', $role->id)}}" method="get">
                                    @csrf
                                    <button>Edit</button>
                                    </form>
                            </td>

                            <td>
                                <form action="{{route('show-role', $role->id)}}" method="get">
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