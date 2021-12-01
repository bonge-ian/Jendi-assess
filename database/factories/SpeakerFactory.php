<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpeakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->name,
            'slug' => Str::slug($name),
            'bio' => $this->faker->unique()->paragraph(1, true),
            // 'avatar' => "https://robohash.org/{$name}?set=set{$this->faker->numberBetween(1, 4)}&size=608x780",
            'avatar' => function() use($name) {
                $sprite = $this->avatarSprites()[array_rand($this->avatarSprites(),1)];

                return "https://avatars.dicebear.com/api/{$sprite}/{$name}.svg";
            },
            'occupation' => $this->faker->jobTitle()
        ];
    }
    protected function avatarSprites() : array
    {
        return [
            'avataaars',
            'micah',
            'miniavs',
            'personas',
            'open-peeps',
            'adventurer'
        ];
    }
}
