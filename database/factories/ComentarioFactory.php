<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenido'=> $this->faker->text,
           'Post_id' => $this->faker->randomElement( Post::all())['id'],//Cargamos lo datos dependiendo del id de la tabla Post  - LLave foranea
        ];
    }
}
