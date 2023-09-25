<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
'nom'=>$this->faker->sentence,
            'lieu'=>$this->faker->address,
            'date'=>$this->faker->date,
            'description'=>$this->faker->paragraph,
            'categorie' => $this->faker->randomElement(['Vêtements', 'Électronique', 'Nourriture', 'Autre'])



//            $table->id();
//        $table->string('nom');
//        $table->string('Lieu');
//        $table->string('categorie')->default('Autre');
//        $table->date('date');
//        $table->text('description');
        ];
    }
}
