<!-- show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Role Details</title>
</head>
<body>
    <h1>Role Details</h1>

    <div>
        <h3>Category Name: {{ $category->name }}</h3>
        <p>Category ID: {{ $category->id }}</p>
    </div>

    <a href="{{ route('list-categories') }}">Back to Categories</a>
</body>
</html>