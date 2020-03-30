<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocalGroupsTest extends TestCase
{
    use RefreshDatabase;

     /**
     * Test existence of Local Groups page
     *
     * @return void
     */
    public function testLocalGroupsRouteExists()
    {
        $response = $this->get('/local-groups');
        $response->assertStatus(200);
    }

     /**
     * Test existence of Local Groups index page with content
     *
     * @return void
     */
    public function testLocalGroupsIndexViewExists()
    {
        $response = $this->get('/local-groups');
        $response->assertSee("Local Groups");
    }

     /**
     * Test for Local Groups data to be present on Local Groups page
     *
     * @return void
     */
    public function testUsersCanSeeAllLocalGroups()
    {
        $group = factory('App\Models\LocalGroup')->create();
        $response = $this->get('/local-groups');
        $response->assertSee($group->name);
    }
}
