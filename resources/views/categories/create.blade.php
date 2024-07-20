


<!-- resources/views/categories/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6">Create New Category</h1>
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" rows="4">{{ old('description') }}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
                <a href="{{ route('categories.index') }}" class="text-gray-500 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
