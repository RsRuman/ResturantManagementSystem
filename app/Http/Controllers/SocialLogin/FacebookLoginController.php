<?php

namespace App\Http\Controllers\SocialLogin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookLoginController extends Controller
{
    public function redirectToProvider(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(){

        $facebookUser = Socialite::driver('facebook')->user();
        $user = User::where('uid', $facebookUser->getId())->first();
        $userEmail = User::where('email', $facebookUser->getEmail())->first();

        if (!$user){
            if(!$userEmail){
                $user = User::create([
                    'uid' => $facebookUser->getId(),
                    'name' => $facebookUser->getName(),
                    'nick_name' => $facebookUser->getNickname(),
                    'email' => $facebookUser->getEmail(),
                    'avatar' => $facebookUser->getAvatar()
                ]);
            }
            else{
                return redirect('login');
            }

        }

        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
