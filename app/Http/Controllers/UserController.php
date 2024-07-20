<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->hasFile('profile_image')) {
            // Delete the old image if it exists
            if ($user->profile_image_url) {
                Storage::delete('public/' . $user->profile_image_url);
            }
            // Store the new image
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image_url = $path;
        }


        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
