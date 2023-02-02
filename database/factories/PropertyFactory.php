<?php

namespace Database\Factories;

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
            'landlord_id' => Landlord::factory(),
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween($min = 200, $max = 200000),
            'size' => $this->faker->numberBetween($min = 100, $max = 10000),
            'description' => $this->faker->paragraph(),
            'rooms' => $this->faker->numberBetween($min = 1, $max = 15),
            'bathrooms' => $this->faker->numberBetween($min = 0, $max = 10),
            'images' => $this->faker->imageUrl($width = 400, $height = 400),
            'type' => $this->faker->jobTitle(),
            'address' => $this->faker->address(),
        ];
    }
}
