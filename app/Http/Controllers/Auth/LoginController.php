<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use Exception;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }



public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    try {
        $user = Socialite::driver('google')->user();
    } catch (Exception $e) {
        return redirect('auth/google');
    }

    //dd($user);
    $authUser = $this->createUser ($user);
    Auth::login($authUser, true);
    return redirect()->route('home');
}

public function createUser($user)
{
    $authUser = User::where('email', $user->email)->first();
    //dd($authUser);
    if ($authUser){
        return $authUser;
    }

    return User::create([

        'name'=> $user->name,
        //'google_id'=> $user->id,
        'email'=> $user->email,
        //'avatar'=> $user->avatar,

    ]);
}


}