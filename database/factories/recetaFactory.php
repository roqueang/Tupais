<?php

namespace Database\Factories;

use App\Models\receta;
use Illuminate\Database\Eloquent\Factories\Factory;

class recetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = receta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idmedico' => $this->faker->randomDigitNotNull,
        'idcolaborador' => $this->faker->randomDigitNotNull,
        'idmedicamento' => $this->faker->randomDigitNotNull,
        'idservicio' => $this->faker->randomDigitNotNull,
        'fechadeemision' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
