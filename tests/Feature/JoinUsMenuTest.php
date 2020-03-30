<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JoinUsMenuTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test existence of Join Us menu item in navbar
     *
     * @return void
     */
    public function testJoinUsMenuExists()
    {
        $response = $this->get('/');
        $response->assertSee('Join Us');
    }

    /**
     * Test existence of Join Us sub-menu items
     *
     * @return void
     */
    public function testSubMenuItemLocalGroupsExists()
    {
        $response = $this->get('/');
        $response->assertSeeInOrder(['Events', 'Local Groups', 'Resources']);
    }
}
