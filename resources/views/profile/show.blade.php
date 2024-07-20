<!-- resources/views/profile/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-bold mb-4">User Profile</h1>
        <div class="mb-4">
            @if($user->profile_image_url)
                <img src="{{ asset('storage/' . $user->profile_image_url) }}" alt="Profile Image" class="w-32 h-32 rounded-full mb-4">
            @endif
        </div>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <a href="{{ route('profile.edit') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit Profile</a>
    </div>
</body>
</html>
