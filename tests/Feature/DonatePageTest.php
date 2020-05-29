<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DonatePageTest extends TestCase
{
    /**
     * Test existence of Donate page
     *
     * @return void
     */
    public function testDonateRouteExists()
    {
        $response = $this->get('/donate');
        $response->assertStatus(200);
    }

    /**
     * Test existence of Donate page view
     *
     * @return void
     */
    public function testDonatePageViewExists()
    {
        $response = $this->get('/donate');
        $response->assertStatus(200);
        $response->assertSeeText('Donate');
    }

    /**
     * Test existence of Donate button in nav bar
     *
     * @return void
     */
    public function testDonateButtonExistsInMainNav()
    {
        $response = $this->get('/');
        $response->assertSeeText('Donate');
    }



}
