<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Extension;
use App\Models\UserLogin;
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

    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();
    }

    public function showLoginForm(Request $request)
    {

//dd(request('fullurl'));
// if(!session()->has('url.intended'))
//     {
//         session(['url.intended' => url()->previous()]);
//     }
    //return view('auth.login');
$fullUrl=request('fullurl');
        $pageTitle = "Sign In";
        return view(activeTemplate() . 'user.auth.login', compact('pageTitle','fullUrl'));
    }

    public function login(Request $request)
    {
       //dd(request('fullurl'));

        $this->validateLogin($request);

        if(isset($request->captcha)){
            if(!captchaVerify($request->captcha, $request->captcha_secret)){
                $notify[] = ['error',"Invalid captcha"];
                return back()->withNotify($notify)->withInput();
            }
        }

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

           $fullUrl=request('fullurl');
           //dd($fullUrl);


        if ($this->attemptLogin($request)) {

//dd($fullUrl);

    // if(!session()->has('url.intended'))
    // {
    //     session(['url.intended' => url()->previous()]);
    // }
            //dd(url()->previous());

//session(['url.intended' => url()->previous()]);
    //return view('auth.login');
        if(!is_null($fullUrl))
        {
          //dd($fullUrl);
           return redirect()->intended($fullUrl);
        }
            return $this->sendLoginResponse($request);
        }

//dd($fullUrl);

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function findUsername()
    {
        $login = request()->input('username');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }

    public function username()
    {
        return $this->username;
    }

    protected function validateLogin(Request $request)
    {
        $customRecaptcha = Extension::where('act', 'custom-captcha')->where('status', 1)->first();
        $validation_rule = [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ];

        if ($customRecaptcha) {
            $validation_rule['captcha'] = 'required';
        }

        $request->validate($validation_rule);

    }

    public function logout()
    {
        $this->guard()->logout();

        request()->session()->invalidate();

        $notify[] = ['success', 'You have been logged out.'];
        return redirect()->route('home')->withNotify($notify);
    }



    public function authenticated(Request $request, $user)
    {
        if ($user->status == 0) {
            $this->guard()->logout();
            $notify[] = ['error','Your account has been deactivated.'];
            return redirect()->route('user.login')->withNotify($notify);
        }

        $user = auth()->user();
        $user->tv = $user->ts == 1 ? 0 : 1;
        $user->save();
        $ip = $_SERVER["REMOTE_ADDR"];
        $exist = UserLogin::where('user_ip',$ip)->first();
        $userLogin = new UserLogin();

//dd($userLogin);

        if ($exist) {
        //  dd('dd1');
            $userLogin->longitude =  $exist->longitude;
            $userLogin->latitude =  $exist->latitude;
            $userLogin->city =  $exist->city;
            $userLogin->country_code = $exist->country_code;
            $userLogin->country =  $exist->country;
        }else{
            $info = json_decode(json_encode(getIpInfo()), true);
  //dd('dd2');
            if($info["long"]!==null) {
            $userLogin->longitude =  @implode(",",$info["long"]);
             }

             if($info["lat"]!==null) {
              $userLogin->latitude =  @implode(',',$info['lat']);
             }
             if($info["city"]!==null) {
             $userLogin->city =  @implode(',',$info['city']);
             }
             if($info["code"]!==null) {
           $userLogin->country_code = @implode(',',$info['code']);
             }
           if($info["country"]!==null) {
         $userLogin->country =  @implode(',', $info['']);
             }
        }

        $userAgent = osBrowser();
        $userLogin->user_id = $user->id;
        $userLogin->user_ip =  $ip;

        $userLogin->browser = @$userAgent['browser'];
        $userLogin->os = @$userAgent['os_platform'];
        $userLogin->save();

        return redirect()->route('user.home');
    }
}
