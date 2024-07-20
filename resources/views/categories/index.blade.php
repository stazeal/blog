<!-- resources/views/categories/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this post?');
        }
    </script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Categories</h1>
        <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Category</a>
        <div class="mt-4 bg-white shadow-md rounded p-4">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left py-2">Name</th>
                        <th class="text-left py-2">Description</th>
                        <th class="text-left py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="border-t">
                            <td class="py-2">{{ $category->name }}</td>
                            <td class="py-2">{{ $category->description }}</td>
                            <td class="py-2">
                                <a href="{{ route('categories.show', $category) }}" class="bg-blue-500 px-4 py-2 rounded ">Show</a>
                                <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 px-4 py-2 rounded mx-2">Edit</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500  px-4 py-2 rounded onsubmit="return confirmDelete() ">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
