<?php

namespace App\Http\Controllers\Auth;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class BankLoginController extends Controller
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
    protected $redirectTo = 'bank/';

    protected function guard()
    {
      return Auth::guard('bank');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:bank')->except('logout');
    }

    //show login form
    public function showLoginForm(){
      return view('auth.bank.login');
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'username'   => 'required|string',
        'password' => 'required|string|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard('bank')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('bank.index'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      //return redirect()->back()->withInput($request->only('username', 'remember'));
      $errors = new MessageBag(['password' => ['email and/or password is invalid.']]);
      return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
    }


    public function logout()
    {
        Auth::guard('bank')->logout();
        return redirect()->route('bank.login');
    }
}
