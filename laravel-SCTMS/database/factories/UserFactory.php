<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate a random role from 0 to 4
        $role = fake()->unique()->numberBetween(0,4);
       
        // Generate an email based on the role
        switch ($role) {
        case 0:
        $email = 'student@mail.com';
        break;
        case 1:
        $email = 'mentor@mail.com';
        break;
        case 2:
        $email = 'supervisor@mail.com';
        break;
        case 3:
        $email = 'admin@mail.com';
        break;
        case 4:
        $email = 'superadmin@mail.com';
        break;
        default:
        $email = fake()->unique()->safeEmail();
        }
       
        return [
        'name' => fake()->name(),
        'email' => $email,
        'email_verified_at' => now(),
        'role'=> $role,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        ];
    }


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}