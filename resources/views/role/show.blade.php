<!-- show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Role Details</title>
</head>
<body>
    <h1>Role Details</h1>

    <div>
        <h3>Role Name: {{ $role->name }}</h3>
        <p>Role ID: {{ $role->id }}</p>
    </div>

    <a href="{{ route('list-roles') }}">Back to Roles</a>
</body>
</html>