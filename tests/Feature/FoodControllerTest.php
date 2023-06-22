<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Food;

class FoodControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_can_get_all_foods()
    {
        // Create some sample foods
        Food::factory()->count(3)->create();

        // Send a GET request to the endpoint
        $response = $this->get('/api/foods');

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the response JSON contains the expected number of foods
        $response->assertJsonCount(3);
    }

    public function test_can_delete_food()
    {
        // Create a sample food
        $food = Food::factory()->create();

        // Send a DELETE request to the endpoint for the specific food
        $response = $this->delete('/api/foods/' . $food->id);

        // Assert that the response has a successful status code
        $response->assertStatus(204);

    
    }


}
