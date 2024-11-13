<?php

namespace Database\Factories;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now()->subMonths(1);

        $user = User::whereNotNull('email_verified_at')
            ->where('role', 'anggota')
            ->inRandomOrder()
            ->first('id');

        $book = Book::where('book_count', '>', 1)
            ->inRandomOrder()
            ->first('id');

        $borrow_date = $now->addDays(7)
            ->format('Y-m-d');

        $return_date = $now->addDays(rand(20, 35))
            ->format('Y-m-d');

        return [
            'code' => Str::random(20),
            'book_id' => $book,
            'user_id' => $user,
            'borrow_date' => $borrow_date,
            'return_date' => $return_date,
            'status' => ($return_date > now()) ? 'Berjalan' : 'Terlambat',
        ];
    }
}
