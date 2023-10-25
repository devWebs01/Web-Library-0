<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $transactions = Transaction::get();
        return view('transaction.report', [
            'transactions' => Transaction::latest()->get(),
        ]);
    }
}
