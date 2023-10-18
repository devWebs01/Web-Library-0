<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $waiting = Transaction::where('status', 'Menunggu')
            ->get();
        $walking = Transaction::where('status', 'Berjalan')
            ->get();
        $penalty = Transaction::where('status', 'Terlambat')
            ->get();
        $finished = Transaction::where('status', 'Selesai')
            ->get();

        return view('transaction.index', [
            'waiting' => $waiting,
            'walking' => $walking,
            'penalty' => $penalty,
            'finished' => $finished,
        ]);
    }
}
