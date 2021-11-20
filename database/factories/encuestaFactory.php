<?php

namespace Database\Factories;

use App\Models\encuesta;
use Illuminate\Database\Eloquent\Factories\Factory;

class encuestaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = encuesta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idcolaborador' => $this->faker->randomDigitNotNull,
        'idservicio' => $this->faker->randomDigitNotNull,
        'idmedico' => $this->faker->randomDigitNotNull,
        'fechadeatencion' => $this->faker->word,
        'calidaddeservicio' => $this->faker->word,
        'comentario' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
