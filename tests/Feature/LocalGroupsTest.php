<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocalGroupsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function local_groups_route_exists()
    {
        $response = $this->get('/local-groups');
        $response->assertStatus(200);
    }

    /** @test */
    public function local_groups_index_view_exists()
    {
        $response = $this->get('/local-groups');
        $response->assertSee("Local Groups");
    }

    /** @test */
    public function users_can_see_all_local_groups()
    {
        $group = factory('App\Models\LocalGroup')->create();
        $response = $this->get('/local-groups');
        $response->assertSee($group->name);
    }
}
