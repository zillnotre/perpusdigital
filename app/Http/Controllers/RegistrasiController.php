<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form registrasi
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Buat pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->level = $request->level;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect pengguna setelah registrasi
        return redirect('/sesi')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
    