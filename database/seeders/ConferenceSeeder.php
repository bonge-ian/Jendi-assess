<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conference::factory()
            ->count(50)
            ->create();
    }
}
