<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
}
