<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __invoke()
    {
        // return response()->json([
        //     'message' => 'Token generated successfully',
        // ]);
        return Auth::user();
    }
}
