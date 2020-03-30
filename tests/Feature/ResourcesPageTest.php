<?php

namespace Tests\Feature;

use App\Models\Item;
use App\Models\ItemType;
use ItemTypesTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResourcesPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test existence of Resources Page
     *
     * @return void
     */
    public function testResourcesRouteExists()
    {
        $response = $this->get('/resources');
        $response->assertStatus(200);
    }

    /**
     * Test existence of Resources index page content
     *
     * @return void
     */
    public function testResourcesIndexViewExists()
    {
        $response = $this->get('/resources');
        $response->assertSee("Resources");
    }

       /**
     * Test for Resources data to be present on page
     *
     * @return void
     */
    public function testUsersCanSeeAllResources()
    {
        // Items are dependent on ItemTypes existing because of foreign key constraint
        $this->seed(ItemTypesTableSeeder::class);

        // Create item with factory
        $item = factory(Item::class)->create(['item_type_id' => 1]);

        // Check for content
        $response = $this->get('/resources');
        $response->assertSee($item->title);
    }
}
