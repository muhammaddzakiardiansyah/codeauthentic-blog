<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Registrasi',
            'active' => 'registrasi'
        ]);
    }

    public function store(Request $request) {

                    $request->validate([
                    'nama' => 'required|max:255',
                    'username' => 'required|min:5|max:255|unique:users',
                    'email' => 'requires|email|unique:users',
                    'password' => 'required|min:5',
                ]);

           dd('registrasi berhasil');
    }
}
