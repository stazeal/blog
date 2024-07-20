<!-- resources/views/categories/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">{{ $category->name }}</h1>
        <p class="mb-4">{{ $category->description }}</p>
        <a href="{{ route('categories.index') }}" class="text-blue-500 hover:underline">Back to Categories</a>
    </div>
</body>
</html>
