<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class FacebookController extends Controller
{
    /**
     * Redirect to Facebook
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Handle Facebook callback
     */
    public function handleFacebookCallback(Request $request)
    {
        try {
            // 1. Get user data from Facebook
            $facebookUser = Socialite::driver('facebook')->stateless()->user();

            // 2. Try to find the user by facebook_id
            $user = User::where('facebook_id', $facebookUser->getId())->first();

            if (!$user) {
                // 3. If not found by ID, try finding by Email
                $user = User::where('email', $facebookUser->getEmail())->first();

                if ($user) {
                    // Update existing user with Facebook details
                    $user->update([
                        'facebook_id' => $facebookUser->getId(),
                        'avatar' => $facebookUser->getAvatar(),
                    ]);
                } else {
                    // 4. Create a brand new user
                    $user = User::create([
                        'name' => $facebookUser->getName(),
                        'email' => $facebookUser->getEmail(),
                        'facebook_id' => $facebookUser->getId(),
                        'avatar' => $facebookUser->getAvatar(),
                        'password' => bcrypt(str()->random(16)),
                    ]);
                }
            }

            // 5. Log the user in
            Auth::login($user);

            // 6. Redirect to dashboard
            return redirect('/');

        } catch (Exception $e) {

            dd('ERROR DURING LOGIN: ' . $e->getMessage());
        }
    }
}
