<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker;

        return [
            'titre' => $faker->sentence($nbWords = 6),
            'texte' => $faker->paragraph($nbSentences = 3),
            'user_id' => mt_rand(1,4),
        ];
    }
}
