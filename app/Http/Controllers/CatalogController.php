<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Book;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog.index', [
            'books' => Book::latest()->get()
        ]);
    }

    public function show($id)
    {
        return view('catalog.show', [
            'book' => Book::FindOrFail($id),
            'borrow_date' => Carbon::now()->format('Y-m-d'),
            'return_date' => Carbon::now()->addDays(7)->format('Y-m-d')
        ]);
    }

    public function store(TransactionRequest $request)
    {
        $book = Book::findOrFail($request->book_id);
        $user = User::findOrFail($request->user_id);

        $validate = $request->validated();
        $validate['code'] = $user->slug . '-' . Str::random(10);

        $transaction = Transaction::create($validate);

        return redirect()->route('catalog.process', $transaction->id);
    }

    public function process($id)
    {
        $transaction = Transaction::findOrfail($id);
        $books = Book::inRandomOrder()->get();
        $countdown = Carbon::parse($transaction->created_at)->addDays(1)->format('d, M Y, H:i:s');

        return view('catalog.process', [
            'transaction' => $transaction,
            'books' => $books,
            'countdown' => $countdown,
        ]);
    }

    public function history()
    {
        $waiting = Transaction::where('user_id', Auth()->user()->id)
            ->where('status', 'Menunggu')
            ->get();
        $walking = Transaction::where('user_id', Auth()->user()->id)
            ->where('status', 'Berjalan')
            ->get();
        $penalty = Transaction::where('user_id', Auth()->user()->id)
            ->where('status', 'Berjalan')
            ->get();
        $finished = Transaction::where('user_id', Auth()->user()->id)
            ->where('status', 'Berjalan')
            ->get();

        return view('history.index', [
            'waiting' => $waiting,
            'walking' => $walking,
            'penalty' => $penalty,
            'finished' => $finished,
        ]);
    }
}
