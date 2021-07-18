<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    protected $model2 = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'admin_id' => $this->faker->numberBetween($min=1,$max=3),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *d
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

  /*  public function definition2()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => $this->faker->numberBetween($min=1,$max=3),
            'brand' => $this->faker->name,
            'body' => $this->faker->text($maxNbChars=150),
            'price' => $this->faker->randomDigitNotNull,
            'discount' => $this->faker->numberBetween($min=0,$max=150),
            'image' => $this->faker->imageUrl($width=500,$height=500,'sports')

        ];

    }*/

  /* $factory->define(Product::class,function(Faker $faker) {
       return [
           'name' => $this->$faker->name,
           'user_id' => $this->$faker->numberBetween($min=1,$max=3),
           'brand' => $this->$faker->name,
           'body' => $this->$faker->text($maxNbChars=150),
           'price' => $this->$faker->randomDigitNotNull,
           'discount' => $this->$faker->numberBetween($min=0,$max=150),
           'image' => $this->$faker->imageUrl($width=500,$height=500,'sports')
       ];
});*/
}
