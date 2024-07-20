<!-- resources/views/layouts/sidebar.blade.php -->





<div class="bg-blue-700 text-white w-64 min-h-screen p-4">
    <h2 class="text-2xl font-bold mb-4">Aqmumex</h2>
    <div class="mb-4">
        <input type="text" placeholder="Quick Search..." class="w-full p-2 rounded bg-blue-600 text-white placeholder-gray-300">
    </div>
    <ul>
        <li class="mb-2">
            <a href="#" onclick="showContent('profile')" class="hover:underline">Profile</a>
        </li>
        <li class="mb-2">
            <a href="#" onclick="showContent('categories')" class="hover:underline">Categories</a>
        </li>
        <li class="mb-2">
            <a href="#" onclick="showContent('posts')" class="hover:underline">Posts</a>
        </li>
        <li class="mb-2">
            <a href="#" onclick="showContent('comments')" class="hover:underline">Comments</a>
        </li>
    </ul>
</div>
