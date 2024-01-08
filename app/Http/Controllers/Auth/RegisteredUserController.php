<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        session()->put('user_id', $user->id);
        return redirect()->route('verifyCode');
    }

    public function verifyCode(Request $request){
        $code = 123456;
        
        $validator = \Validator::make($request->all(),
            
            [
                'code' => 'required'
                
            ]);


            if ($validator->fails()) {
                return view('auth.registerPhoneVerify')->withErrors($validator);
               
            } 
            else{
                if($request->code == $code){
                    return view('auth.personalInfo');
                }
                else{
                    $error = 'Code is incorrect.';
                    return back()->with('error', $error);
                }
            }
    }

    public function personalInfo(Request $request){
        // $request->validate(
        //     [ 
        //         'first_name' => 'required',
        //         'second_name' => 'required',
        //         'dob' => 'required',
        //         'country' => 'required',
        //         'sex' => 'required',
        //         'cruency' => 'required',
        //     ]
        //  );

         $validator = \Validator::make($request->all(),
            
            [
                'first_name' => 'required',
                'second_name' => 'required',
                'dob' => 'required',
                'country' => 'required',
                'sex' => 'required',
                'cruency' => 'required',
            ]);

            if ($validator->fails()) {
                return view('auth.personalInfo')->withErrors($validator);
            }
            else{
                $user_id = session()->get('user_id');
                $user = User::find($user_id);
                $user->first_name = $request->first_name;
                $user->second_name = $request->second_name;
                $user->dob = $request->dob;
                $user->country = $request->country;
                $user->sex = $request->sex;
                $user->cruency = $request->cruency;
                $user->save();
                
            
                auth()->login($user);

                return view('pages.dashboard');

            }
    }

    
}
