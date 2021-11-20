<?php

namespace Database\Factories;

use App\Models\medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class medicamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = medicamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombremedicamento' => $this->faker->word,
        'presentacion' => $this->faker->word,
        'fechadecreacion' => $this->faker->word,
        'fechadecaducidad' => $this->faker->word,
        'lote' => $this->faker->word,
        'disponible' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
