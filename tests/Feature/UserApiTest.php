<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Form;

class UserApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use WithFaker;

    public function testCreateForm()
    {
        $formData = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'message' => $this->faker->sentence,
        ];

        $response = $this->post('/api/users', $formData);

        $response->assertStatus(200);

        $response->assertJson([
            'user' => $formData,
            'message' => 'User created successfully.',
        ]);

        $this->assertDatabaseHas('users', $formData);
    }
}
