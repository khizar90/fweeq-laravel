<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function phoneLogin(Request $request)
    {
        $validator = Validator::make($request->all(),
            
        [
            'phone' => 'required|exists:users,phone'
            
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
           
        } 
        else{
            session()->put('phone', $request->phone);
            return redirect()->route('loginPhoneVerify');
        }
    }
    
    public function loginVerifyCode(Request $request){
        $code = 123456;
        $validator = Validator::make($request->all(),
            
            [
                'code' => 'required'
                
            ]);


            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
               
            } 
            else{
                if($request->code == $code){
                    
                    $user = User::where('phone', session()->get('phone'))->first();
                    auth()->login($user);
                    return redirect()->route('dashboard');

                }
                else{
                    $error = 'Code is incorrect.';
                    return back()->with('error', $error);
                }
            }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
