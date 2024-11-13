<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Transaction;
use App\Models\User;

class ReportController extends Controller
{
    public function users()
    {
        return view('report.users', [
            'users' => User::whereRole('Anggota')
                ->whereNotNull('email_verified_at')
                ->latest()->get(),
        ]);
    }

    public function books()
    {
        return view('report.books', [
            'books' => Book::latest()->get(),
        ]);
    }

    public function transactions()
    {
        return view('report.transactions', [
            'transactions' => Transaction::latest()->get(),
        ]);
    }
}
