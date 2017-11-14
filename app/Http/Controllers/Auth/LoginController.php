<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
        $this->middleware('guest')->except('logout');
    }

/**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
     protected function authenticated(Request $request, $user)
     {
       if(!$user->activated) {
            auth()->logout();
            return redirect('/login')->with('warning', 'Necesitas activar tu cuenta.');
        }
       return redirect($this->redirectTo);
     }

    protected function validateLogin(Request $request)
    {
      $messages = [
        'CURP.required' => 'Es necesario el CURP.',
        'password.required' => 'La contraseña es necesaria.',
      ];
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ],$messages);
    }
    public function username()
    {
        return 'CURP';
    }
}
