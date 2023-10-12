<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ConfirmationAccountController extends Controller
{
    public function index()
    {
        return view('confirmation.index', [
            'users' => User::whereNull('email_verified_at')->latest()->get()
        ]);
    }

    public function accept($id)
    {
        $user = User::findOrfail($id);
        $user->update([
            'email_verified_at' => now()
        ]);

        return back()->with('success', 'Pengguna ' . $user->name . ' berhasil dikonfirmasi menjadi anggota perpustakaan.');
    }
}
