<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->create([
            [
                'title' => 'To Kill a Mockingbird',
                'description' => 'A novel by Harper Lee.',
                'genre' => 'Fiction',
                'price' => 10.99,
            ],
            [
                'title' => '1984',
                'description' => 'A novel by George Orwell.',
                'genre' => 'Dystopian',
                'price' => 8.99,
            ],
            [
                'title' => 'Moby Dick',
                'description' => 'A novel by Herman Melville.',
                'genre' => 'Adventure',
                'price' => 12.99,
            ],
        ]);
    }
}
