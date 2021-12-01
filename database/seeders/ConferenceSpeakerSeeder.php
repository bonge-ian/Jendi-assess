<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\Speaker;
use Illuminate\Database\Seeder;

class ConferenceSpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $speakers = Speaker::select('id')->get();

        Conference::all()->each(
            fn ($conference) => $conference->speakers()->sync($speakers->random(6)->pluck('id'))
        );
    }
}
