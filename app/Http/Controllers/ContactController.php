<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function contact(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required', 'email',
        ]);

         DB::table('contacts')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect()->back()->with('success','We will Contact you soon');

    }
}
