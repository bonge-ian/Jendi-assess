<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->words(3,true),
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraphs(4, true),
            'theme' => $this->faker->unique()->sentences(2, true),
            'location' => $this->faker->city() . " " . $this->faker->country(),
            'start_date' => $this->faker->dateTimeThisYear('+ 2 months', 'Africa/Nairobi'),
            'end_date' => $this->faker->dateTimeInInterval(
                date: 'now',
                interval: '+ 5 months',
                timezone: 'Africa/Nairobi'
            ),
            'cover_image_url' => "https://picsum.photos/1920/1080?random={$this->faker->randomDigitNotZero()}",
        ];
    }
}
