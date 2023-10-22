<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Book;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index()
    {
        $waiting = Transaction::where('status', 'Menunggu')
            ->orderBy('updated_at', 'DESC')
            ->get();
        $walking = Transaction::where('status', 'Berjalan')
            ->orderBy('updated_at', 'DESC')
            ->get();
        $penalty = Transaction::where('status', 'Terlambat')
            ->orderBy('updated_at', 'DESC')
            ->get();
        $finished = Transaction::where('status', 'Selesai')
            ->orderBy('updated_at', 'DESC')
            ->get();

        $borrow_date = Carbon::now()->format('Y-m-d');

        $return_date = Carbon::now()->addDays(7)->format('Y-m-d');

        $users = User::select('id', 'name')->get();
        $books = Book::get();

        return view('transaction.index', [
            'waiting' => $waiting,
            'walking' => $walking,
            'penalty' => $penalty,
            'finished' => $finished,
            'borrow_date' => $borrow_date,
            'return_date' => $return_date,
            'users' => $users,
            'books' => $books,
        ]);
    }
    public function store(TransactionRequest $request)
    {
        $validate = $request->validated();

        $book = Book::find($request->book_id);
        $book->book_count -= 1;
        $book->save();

        $user = User::findOrFail($request->user_id);

        $validate['code'] = $user->slug . '-' . Str::random(10);

        Transaction::create($validate);

        return back()->with('success', 'Proses penambahan data telah berhasil dilakukan.');
    }

    public function confirmation(Request $request, $id)
    {
        $validate = $request->validate([
            'status' => 'required|string',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date',
        ]);

        $transaction = Transaction::findOrfail($id);

        $transaction->update($validate);

        return back()->with('success', 'Proses penambahan data peminjaman dan pengembalian buku berhasil telah berhasil dilakukan.');
    }
    public function finished($id)
    {
        $transaction = Transaction::findOrfail($id);
        $transaction->update([
            'status' => 'Selesai',
            'return_date' => Carbon::now()->format('Y-m-d'),
        ]);

        return back()->with('success', 'Proses peminjaman dan pengembalian buku telah selesai dilakukan.');
    }

    public function payment()
    {
    }
}
