<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Retrieve the user by the provided email address
        $user = User::where('email', $credentials['email'])->first();

        // Check if the user exists and if the provided password is correct
        if ($user && password_verify($credentials['password'], $user->password)) {
            // If authentication is successful, manually log in the user
            auth()->login($user);

            // Redirect to the 'category.selection' route
            return redirect()->route('category.selection');
        }


        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function categorySelection()
    {
        // Your logic to fetch and display category data goes here
        return view('category_selection');
    }

}
