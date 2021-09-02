<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->name,
            "date"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "auteur"=>$this->faker->name('male'|'female'),
            "profession"=>$this->faker->jobTitle,
            "age"=>$this->faker->numberBetween($min = 10, $max = 99),
            "description"=>$this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
