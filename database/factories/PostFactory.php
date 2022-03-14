<?php

namespace Database\Factories;
use App\Models\Categoria;


use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=> $this->faker->name,
            'contenido'=> $this->faker->text,
           'Categorias_id' => $this->faker->randomElement( Categoria::all())['id'],//Cargamos lo datos dependiendo del id de la tabla Categoria  - LLave foranea

        ];
    }
}
