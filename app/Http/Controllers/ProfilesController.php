<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //

    public function index($user)
    {
        // dd($user); // This outputs whatever we pass into the function on the screen

        // \App\User::find($user); // This method can be used to reference our User.php model
        // dd(User::find($user)); // we can use this to test if we are getting our data

        $user = User::find($user);
        return view('home', [
            'hello' => $user,
        ]);
    }
}
