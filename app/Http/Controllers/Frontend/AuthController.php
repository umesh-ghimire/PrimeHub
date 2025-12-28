<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // Redirect user to Google for authentication
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle callback from Google
    public function handleGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Google authentication failed');
        }

   $user = User::updateOrCreate(
    ['email' => $googleUser->email],
    [
        'name' => $googleUser->name,
        'provider' => 'google',
        'provider_id' => $googleUser->id ?? Str::uuid(), // Use Google ID, or generate random UUID
        'email_verified_at' => now(),
        'password' => Hash::make(uniqid()),
    ]
);

// Force old users without provider to have a random provider_id
if(is_null($user->provider)) {
    $user->provider = 'google';
    $user->provider_id = Str::uuid(); // generates unique random ID
    $user->save();
}


        Auth::login($user);

        return redirect('/');
    }
}
