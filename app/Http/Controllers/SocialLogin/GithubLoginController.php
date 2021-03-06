<?php

namespace App\Http\Controllers\SocialLogin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubLoginController extends Controller
{
    public function redirectToProvider(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback(){

        $gitUser = Socialite::driver('github')->user();
        $user = User::where('uid', $gitUser->getId())->first();
        $userEmail = User::where('email', $gitUser->getEmail())->first();

        if (!$user){
            if (!$userEmail){
                $user = User::create([
                    'uid' => $gitUser->getId(),
                    'name' => $gitUser->getName(),
                    'nick_name' => $gitUser->getNickname(),
                    'email' => $gitUser->getEmail(),
                    'avatar' =>  $gitUser->getAvatar(),
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
