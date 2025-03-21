<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function dashboard()
    {
        $user = auth()->user(); // Get the logged-in user

        return view('/', compact('user')); // Pass to the view
    }

}
