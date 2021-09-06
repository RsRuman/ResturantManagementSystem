<?php

namespace App\Http\Controllers\SocialLogin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToProvider(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(){

        $googleUser = Socialite::driver('google')->user();
        $user = User::where('uid', $googleUser->getId())->first();

        $userEmail = User::where('email', $googleUser->getEmail())->first();

        if (!$user){
            if (!$userEmail){
                $user = User::create([
                    'uid' => $googleUser->getId(),
                    'name' => $googleUser->getName(),
                    'nick_name' => $googleUser->getNickname(),
                    'email' => $googleUser->getEmail(),
                    'avatar' =>  $googleUser->getAvatar(),
                ]);
                event(new Registered($user));
            }
            else{
                return redirect('login');
            }
        }

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);


    }
}
