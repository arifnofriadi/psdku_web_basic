<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return back()->with('info', 'Silakan logout terlebih dahulu sebelum mengakses halaman login!');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            $validateData = $request->validate([
                'email'     =>  'required|email',
                'password'  =>  'required'
            ], [
                'email.required'    =>  'Email tidak boleh kosong',
                'email.email'       =>  'Email tidak valid',
                'password.required' =>  'Password tidak boleh kosong'
            ]);

            $exist = User::where('email', $validateData['email'])->first();

            if (!$exist) {
                return back()->withErrors([
                    'email' => 'Email belum terdaftar'
                ])->withInput();
            }

            if (Auth::attempt($validateData)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard/mahasiswa');
            }

            return back()->withErrors([
                'email' => 'Email atau password salah!',
            ])->withInput();

        } catch (ValidationException $exception) {
            return back()->withErrors($exception->errors())->withInput();
        } catch (\Throwable $th) {
            Log::error([
                'Message'   =>  $th->getMessage(),
                'File'      =>  $th->getFile(),
                'Line'      =>  $th->getLine(),
            ]);

            return $th->getMessage();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
