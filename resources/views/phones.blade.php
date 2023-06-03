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
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Category Id</th>


                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($phones as $phone)    
                <tr>
                    <td>{{ $phone->id }}</td>
                    <td>{{ $phone->title }}</td>
                    <td>{{ $phone->price }}</td>
                    <td>{{ $phone->description }}</td>
                    <td>{{ $phone->image }}</td>
                    <td>{{$phone->category_id}}</td>
                    <td>
                        {{-- Delete --}}
                        <form method="post" action="{{route('delete-phone',$phone->id)}}">
                            @csrf
                            @method("delete")
                            {{-- We are going to delete the item here --}}
                            <button>Delete</button>
                        </form>

                    </td>
                    <td>
                        {{-- Create --}}
                        <form method="get" action="{{route('create-phone')}}">
                            @csrf
                            <button>Create</button>
                            </form>
                       
                            </td>
                            {{-- Edit --}}
                            <td>
                                <form method="get" action="{{route('edit-phone',$phone->id)}}">
                                    @csrf
                                    <button>Edit</button>
                                    </form>
                            </td>
                 
                   <td>
                    {{-- Details --}}
                    <form method="get" action="{{route('show-phone',$phone->id)}}">
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
