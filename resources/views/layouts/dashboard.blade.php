

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white min-h-screen">
            <div class="p-4">
                <h1 class="text-xl font-bold mb-4">Dashboard</h1>
                <ul>
                    <li><a href="{{ route('categories.index') }}" class="block py-2 px-4 hover:bg-gray-700">Categories</a></li>
                    <li><a href="{{ route('posts.index') }}" class="block py-2 px-4 hover:bg-gray-700">Posts</a></li>
                    {{-- <li><a href="{{ route('comments.index') }}" class="block py-2 px-4 hover:bg-gray-700">Comments</a></li> --}}
                    <li><a href="{{ route('profile.show') }}" class="block py-2 px-4 hover:bg-gray-700">Profile</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>
