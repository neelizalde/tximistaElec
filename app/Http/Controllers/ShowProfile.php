<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    //
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        dd('nerea');
        $this->middleware('auth');

        $this->middleware('log')->only('index');

        $this->middleware('subscribed')->except('store');
    }
}
