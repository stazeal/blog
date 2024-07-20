<!-- resources/views/posts/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-4">Category: {{ $post->name }}</p>
        <p class="mb-4">{{ $post->body }}</p>
        @if ($post->url)
            <p class="text-blue-500 hover:underline mb-4"><a href="{{ $post->url }}" target="_blank">Read more</a></p>
        @endif
        <a href="{{ route('posts.index') }}" class="text-blue-500 hover:underline">Back to Posts</a>
    </div>
</body>
</html>
