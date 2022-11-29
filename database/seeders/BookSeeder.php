<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\BookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fact = new BookFactory();
        $fact->count(1000)->create();
    }
}
