<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hakim>
 */
class HakimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $daftar_titel = ["S.H.,M.H", "S.H.,M.Hum", "S.H.,LLM", "S.H"];

        return [
            'nip'  => $this->faker->unique()->numerify('19##############'),
            'nama' => $this->faker->firstName()." ".$this->faker->lastName()." ".$this->faker->randomElement($daftar_titel),
            'status' => $this->faker->numberBetween(0,1),
            'keterangan' => '-',
        ];
    }
}
