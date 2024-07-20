<!-- resources/views/profile/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Profile</h1>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="profile_image" class="block text-gray-700">Profile Image</label>
                <input type="file" name="profile_image" id="profile_image" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                @if($user->profile_image_url)
                    <img src="{{ asset('storage/' . $user->profile_image_url) }}" alt="Profile Image" class="w-32 h-32 rounded-full">
                @endif
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
@endsection
