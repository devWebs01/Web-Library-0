<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
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
