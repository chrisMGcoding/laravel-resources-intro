<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "url"=>$this->faker->imageUrl($width = 640, $height = 480),
            "name"=>$this->faker->firstName('male'|'female'),
            "description"=>$this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
