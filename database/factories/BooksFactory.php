<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Books::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName;
        $email = strtolower($name) . "@" . $this->faker->freeEmailDomain;
        $fullName = $name . "" . $this->faker->lastName;

        return [
            'name' => $fullName,
            'date' => $this->faker->date('d-m-y'),
            'email' => $email,

        ];
    }
}
