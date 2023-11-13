<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookshelfRequest;
use App\Models\Book;
use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    public function index()
    {
        return view('bookshelf.index', [
            'bookshelves' => Bookshelf::get(),
            'books' => Book::count()
        ]);
    }

    public function store(BookshelfRequest $request)
    {
        Bookshelf::create($request->validated());

        return back()->with('success', 'Proses penambahan data telah berhasil dilakukan.');
    }

    public function update(BookshelfRequest $request, Bookshelf $bookshelf)
    {
        $bookshelf->update($request->validated());

        return back()->with('success', 'Proses pengeditan data telah berhasil dilakukan.');
    }

    public function destroy(Bookshelf $bookshelf)
    {
        $bookshelf->delete();
        return back()->with('success', 'Proses penghapusan data telah berhasil dilakukan.');
    }
}
