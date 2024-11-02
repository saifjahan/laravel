<?php

namespace Database\Factories;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker->words(3,true);
        $detail = $this->faker->words(15,true);
        return [

            'name'=> $name,
            'detail' => $detail
            
        ];
    }
}
