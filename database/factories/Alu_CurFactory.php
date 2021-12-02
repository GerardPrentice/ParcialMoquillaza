<?php

namespace Database\Factories;

use App\Models\Alu_Cur;
use Illuminate\Database\Eloquent\Factories\Factory;

class Alu_CurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alu_Cur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codalu' => $this->faker->word,
        'codcur' => $this->faker->word,
        'nota' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
