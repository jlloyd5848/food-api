<?php

namespace Tests\Feature;

use App\Models\MealCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MealCategoryControllerTest extends TestCase
{
    /**
     * Test getting all categories
     */

    public function testIndex(){
        // Create some sample meal categories
        MealCategory::factory()->count(3)->create();

        // Send a GET request to the index() endpoint
        $response = $this->get('/api/meal-categories');

        // Assert the response status code
        $response->assertStatus(200);

        // Assert the response structure and content
        $response->assertJsonStructure([

            '*' => [
                'id',
                'name',
                'created_at',
                'updated_at',
            ]

        ]);

        // Might need to remove the entries after 

    }

    public function test_can_create_meal_category() {

        $testName = "TestName3";

        // Send POST request to endpoint with new meal category data
        $response = $this->post('/api/meal-categories',[
            'name' => $testName
        ]);
        // Assert that response has successful status code
        $response->assertStatus(201);
        // Assert that the response JSON contains the newly created meal category data
        $response->assertJson([
            'name' => $testName

        ]);

    }


    // public function test_can_update_existing_meal_category() {
    //     // Send POST request to endpoint with new meal category name
        

    //     // assert that the response has successfull status code

    //     // assert that the response JSON contains the updated meal category data

    //     // assert that the database has updated the name to new name.
    // }


}
