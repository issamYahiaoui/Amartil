<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use function Couchbase\defaultDecoder;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = '/users';
    protected $redirectToCustomer = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function loginCustomer()
    {
        return view('auth.loginCustomer');
    }
    public function login(Request $request)
    {
        //dd($request->all()) ;

        $this->validate($request, [
            'email' => ['required'],
            'password' => ['required']
        ]);


        // Set up the login attempt
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'active' => 1,

        ];

            if($request->url() == "http://localhost:8000/login" ){
                $user = User::where('email',$request->input('email') )->first() ;
                if ($user){
                if($user->role === "customer" ){
                    Session::Flash('fail',"This is a private space for the admin");
                    return Redirect::back();

                    }
                 }
            }

        // Attempt to auth the user
        if (Auth::attempt($credentials)) {


            // Login success
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    protected function authenticated(Request $request, $user)
    {

        if ($user->role === "customer") {
            return \redirect($this->redirectToCustomer) ;
        }
        return redirect($this->redirectTo);
    }
}
