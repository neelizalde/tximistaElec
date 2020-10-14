<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        dd('nerea');
    }

    public function cliente():void
    {
        dd('Elizalde');
        view(
            'cliente',
            [
                'cliente' => $cliente ?? null,
            ]
        );
    }
}
