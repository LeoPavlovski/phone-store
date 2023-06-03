<!DOCTYPE html>
<html>
<head>
    <title>Phone List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <!-- Add more table cells as needed -->
                    {{-- One For Delete --}}
                    <td>
                        <form method="post" action="{{route('delete-category',$category->id) }}">
                            @csrf
                            @method('delete')
                            <button>Delete</button>
                            </form>      
                    </td>
                  
                    
                    {{-- Create --}}
                    <td>
                        <form method="get" action="{{route('create-category')}}">
                            @csrf
                            <button>Create</button>
                            </form>
                    </td>
                    
                    {{-- Edit --}}
                    <td>
                        <form method="get" action="{{route('edit-category', $category->id)}}">
                            @csrf
                            <button>Edit</button>
                            </form>        
                    </td>
                
                    {{-- Details --}}
                    <td>
                        <form method="get" action="{{route('show-category',$category->id) }}">
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