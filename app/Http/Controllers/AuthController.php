<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            $validateData = $request->validate([
                'email'     =>  'required|email',
                'password'  =>  'required'
            ]);

            return $validateData;

        } catch (\Throwable $th) {
            Log::error([
                'Message'   =>  $th->getMessage(),
                'File'      =>  $th->getFile(),
                'Line'      =>  $th->getLine(),
            ]);

            return $th->getMessage();
        }
    }
}
