<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        function showContent(section) {
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(s => s.style.display = 'none');
            
            const activeSection = document.getElementById(section);
            if (activeSection) {
                activeSection.style.display = 'block';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            showContent('profile'); // Show profile by default
        });
    </script>
</head>
<body class="bg-gray-100 flex">
    @include('layouts.sidebar')
    <div class="flex-1 p-8">
        <div id="profile" class="content-section" style="display:none;">
            @include('profile.show')
        </div>
        <div id="categories" class="content-section" style="display:none;">
            @include('categories._index')
        </div>
        <div id="posts" class="content-section" style="display:none;">
            @include('posts.index')
        </div>
        <div id="comments" class="content-section" style="display:none;">
            @include('comments.index')
        </div>
    </div>
</body>
</html>
