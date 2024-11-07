<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query builder
        DB::table("bookshelves")->insert([
            [
                'code' => 'RAK0A',
                'name' => 'Manga',
            ],
            [
                'code' => 'RAK1B',
                'name' => 'Novel',
            ],
            [
                'code' => 'TAG2C',
                'name' => 'Kitab Kuning',
            ],
        ]);
    }
}
