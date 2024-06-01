<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = require  'comics.php';

        foreach ($comics as $comic) {
            DB::table('comics')->insert([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => $comic['price'],
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'],
                'type' => $comic['type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}}
