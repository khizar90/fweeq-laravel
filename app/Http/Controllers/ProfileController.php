<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function update(Request $request)
    {

        $request->validate([
            'phone' => 'unique:users'
        ]);

        $user = Auth::user();

        $user->first_name = $request->first_name;
        $user->second_name = $request->second_name;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->sex = $request->sex;
        $user->cruency = $request->cruency;
        $user->country = $request->country;

        $user->save();

        return redirect()->back()->with('success', 'Profile updated!');
    }
}
