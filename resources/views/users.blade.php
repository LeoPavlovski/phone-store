<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role Id</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role_id }}</td>

                    <!-- Add more table cells as needed -->
                    {{-- One For Delete --}}
                    <td>
                        <form method="post" action="{{route('delete-user',$user->id) }}">
                            @csrf
                            @method('delete')
                            <button>Delete</button>
                            </form>      
                    </td>
                  
                    
                    {{-- Create --}}
                    <td>
                        <form method="get" action="{{route('create-user')}}">
                            @csrf
                            <button>Create</button>
                            </form>
                    </td>
                    
                    {{-- Edit --}}
                    <td>
                        <form method="get" action="{{route('edit-user', $user->id)}}">
                            @csrf
                            <button>Edit</button>
                            </form>        
                    </td>
                
                    {{-- Details --}}
                    <td>
                        <form method="get" action="{{route('show-user',$user->id) }}">
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