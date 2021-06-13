<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Landlord;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'agent_id'=>Agent::factory(),
            'landlord_id'=>Landlord::factory(),
            'name'=>$this->faker->name(),
            'price'=>$this->faker->numberBetween($min=200,$max=200000),
            'feature'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'images'=>$this->faker->imageUrl($width=400,$height=400),
            'type'=>$this->faker->jobTitle(),
            'location'=>$this->faker->address(),
            'period_of_availability'=>$this->faker->randomDigitNot(0),
            'urgency'=>$this->faker->colorName(),
        ];
    }
}
