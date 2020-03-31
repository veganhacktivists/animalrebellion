<?php

namespace Tests\Feature;

use EventsTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventsPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test existence of Events Page.
     *
     * @return void
     */
    public function testEventsRouteExists()
    {
        $response = $this->get('/events');
        $response->assertStatus(200);
    }

    /**
     * Test existence of Resources index page content.
     *
     * @return void
     */
    public function testEventsIndexViewExists()
    {
        $response = $this->get('/events');
        $response->assertStatus(200);
        $response->assertSee('Events');
    }

    /**
     * Test for Events data to be present on page.
     *
     * @return void
     */
    public function testUsersCanSeeAllEvents()
    {
        // Use seeder since no factory exists
        $this->seed(EventsTableSeeder::class);

        // Check for content
        $response = $this->get('/events');
        $response->assertStatus(200);

        // Check for events types on page (this metadata is different between the tnree seeded records)
        $response->assertSeeTextInOrder(['Activity', 'Meeting', 'Talk']);
    }
}
