<?php

namespace Tests\Feature;

use App\Models\LocalGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocalGroupsPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test existence of Local Groups page.
     *
     * @return void
     */
    public function testLocalGroupsRouteExists()
    {
        $response = $this->get('/local-groups');
        $response->assertStatus(200);
    }

    /**
     * Test existence of Local Groups index page with visible content.
     *
     * @return void
     */
    public function testLocalGroupsIndexViewExists()
    {
        $response = $this->get('/local-groups');
        $response->assertStatus(200);
        $response->assertSee('Local Groups');
    }

    /**
     * Test for Local Groups data to be present on Local Groups page.
     *
     * @return void
     */
    public function testUsersCanSeeAllLocalGroups()
    {
        $group = factory(LocalGroup::class)->create();
        $response = $this->get('/local-groups');
        $response->assertStatus(200);
        $response->assertSee($group->name);
    }
}
