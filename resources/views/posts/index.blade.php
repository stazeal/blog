<!-- resources/views/posts/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
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
        <h1 class="text-2xl font-bold mb-4">Posts</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Post</a>
        <div class="mt-4 bg-white shadow-md rounded p-4">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left py-2">Title</th>
                        <th class="text-left py-2">Category</th>
                        <th class="text-left py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="border-t">
                            <td class="py-2">{{ $post->title }}</td>
                            <td class="py-2">{{ $post->name }}</td>
                            <td class="py-2">
                                <a href="{{ route('posts.show', $post) }}" class="bg-blue-500  px-4 py-2 rounded ">Show</a>
                                <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 px-4 py-2 rounded mx-2">Edit</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500  px-4 py-2 rounded">Delete</button>
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
