<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Photo::factory(10)->create();
        \App\Models\Album::factory(10)->create();
    }
}
