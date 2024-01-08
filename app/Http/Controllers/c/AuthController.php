<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\ResetPasswordEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (\Auth::attempt($credentials)) {
            $user = \Auth::user();
            return redirect()->route('dashboard')->with('user', $user);
        } else {
            $error = 'Invalid login credentials.';
            return redirect()->back()->with('error', $error);
        }

    }

    public function loginPhone(Request $request){
        $validator = \Validator::make($request->all(),
            
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
        $validator = \Validator::make($request->all(),
            
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

    public function register(Request $request){
        $request->validate(
            [ 
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|unique:users,phone',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required|min:8',
                'terms' => 'required',

            ]
         );
         $user = new User;
         $user->email  =$request->email;
         $user->phone  =$request->phone;
         $user->password  =\Hash::make($request->password);
         $user->first_name = '';
         $user->save(); 
         
        // session()->flash('code', 'We send code to you');
        session()->put('user_id', $user->id);
        return view('auth.registerPhoneVerify');
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
                    return view('auth.personalInfon');
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


    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect()->route('login');
    }


    public function forgot(Request $request){
        $request->validate(
            [ 
                'email' => 'required|email|exists:users,email',

            ]
         );
        $user = User::where('email',$request->email)->first();
        return redirect()->route('checkEmail');

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => \Hash::make($token),
            'created_at' => now()
        ]);
    
        Mail::to($user->email)->send(new ResetPasswordEmail($token));
    }
}
