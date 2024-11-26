<?php

namespace Database\Factories;

use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageFaker = new ImageFaker(new Picsum());
        return [
            'title' => fake()->text(15),
            'body' => fake()->text(200),
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'image' => $imageFaker->image(public_path("images")), //Prenez la peine de créez un dossier 'images' dans 'public'
        ];
    }
}
