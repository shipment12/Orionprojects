<?php

namespace App\Http\Controllers\Security;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotPassword extends Controller
{
    //
    public function forgot(){
        return view('security.forgot');
    }


    public function password(Request $request){
         dd($request->all());
    }
}
