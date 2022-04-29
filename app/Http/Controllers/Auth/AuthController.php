<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect(route('main-page'));
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->orwhere('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }
        $name = $user->name;
        if (!$name){
            $name = $user->nickname;
        }
        return User::create([
            'name'     => $name,
            'email'    => $user->email,
            'avatar'   => $user->avatar,
            'provider' => $provider,
            'provider_id' => $user->id,
            'password' => encrypt(Str::random())

        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('main-page'));

    }

//    public function handleProviderCallback()
//    {
//        try {
//            $user = Socialite::driver('google')->user();
//            $finduser = User::where('google_id', $user->id)->first();
//            if ($finduser) {
//                Auth::login($finduser);
//                return redirect()->intended('dashboard');
//            } else {
//                $newUser = User::create([
//                    'name' => $user->name,
//                    'email' => $user->email,
//                    'google_id' => $user->id,
//                    'password' => encrypt('123456dummy')
//                ]);
//                Auth::login($newUser);
//                return redirect()->intended('dashboard');
//            }
//        } catch (Exception $e) {
//            dd($e->getMessage());
//        }
//    }
}
