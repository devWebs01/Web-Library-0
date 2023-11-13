<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Book;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function borrow()
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

        return view('transaction.borrow', [
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
    public function return()
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

        return view('transaction.return', [
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

        $transaction = Transaction::where('user_id', $request->user_id)
            ->where(function ($query) {
                $query->where('status', 'Berjalan')
                    ->orWhere('status', 'Terlambat');
            })->orWhere(function ($query) {
                $query->where('status', 'Berjalan')
                    ->Where('status', 'Terlambat');
            })
            ->count();


        if ($transaction >= 3) {
            return back()->with('warning', 'Peminjaman melebihi batas yang telah ditentukan 😀');
        } else {
            $book = Book::find($request->book_id);
            $book->book_count -= 1;
            $book->save();

            $user = User::findOrFail($request->user_id);

            $validate['code'] = $user->slug . '-' . Str::random(10);

            Transaction::create($validate);

            return back()->with('success', 'Proses penambahan data telah berhasil dilakukan.');
        }
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

        $book = Book::findOrfail($transaction->book->id);
        $book->book_count++;
        $book->save();

        return back()->with('success', 'Proses peminjaman dan pengembalian buku telah selesai dilakukan.');
    }

    public function reject($id)
    {
        $transaction = Transaction::findOrfail($id);

        $transaction->update([
            'status' => 'Tolak',
            'borrow_date' => null,
            'return_date' => null,
        ]);

        $book = Book::findOrfail($transaction->book->id);
        $book->book_count++;
        $book->save();

        return back()->with('success', 'Proses peminjaman dan pengembalian buku berhasil di tolak.');
    }

    public function extratime($id)
    {
        $transaction = Transaction::findOrfail($id);

        $transaction->update([
            'status' => 'Berjalan',
            'return_date' => Carbon::parse($transaction->return_date)
                ->addDays(7)
                ->format('Y-m-d'),
        ]);

        return back()->with('success', 'Proses perpanjangan waktu peminjaman dan pengembalian buku telah dilakukan.');
    }
}
