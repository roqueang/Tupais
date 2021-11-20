<?php

namespace Database\Factories;

use App\Models\reservacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class reservacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = reservacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idcolaborador' => $this->faker->randomDigitNotNull,
        'idmedico' => $this->faker->randomDigitNotNull,
        'idservicio' => $this->faker->randomDigitNotNull,
        'fechadereservacion' => $this->faker->word,
        'hora' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
