<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'code' => Str::random(20),
            'book_id' => Book::all()->random(),
            'user_id' => User::all()->random(),
            'borrow_date' => $now->addDays(7)->format('Y-m-d'),
            'return_date' => $now->addDays(14)->format('Y-m-d'),
            'status' => $this->faker->randomElement(['Menunggu', 'Berjalan', 'Terlambat'])
        ];
    }
}
