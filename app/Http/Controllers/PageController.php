<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function formInput(){
        return view('pages.form_input');
    }

    public function welcome(Request $request){

        $firstName = $request['first_name'];
        $lasttName = $request['last_name'];

        return view('pages.welcome', compact('firstName', 'lastName'));
    }
}
