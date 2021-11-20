<?php

namespace Database\Factories;

use App\Models\servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class servicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreservicio' => $this->faker->word,
        'tipo' => $this->faker->word,
        'cantidad' => $this->faker->word,
        'disponible' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
