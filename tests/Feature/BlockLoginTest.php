<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlockLoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * General visitors to the website should not be able to login.
     *
     * @return void
     */
    public function testLoginPageIsNotAvaialble()
    {
        $response = $this->get('/login');
        $response->assertStatus(404);
    }

    /**
     * General visitors to the website should not be able access user settings.
     *
     * @return void
     */
    public function testSettingsPageIsNotAvaialble()
    {
        $response = $this->get('/settings');
        $response->assertStatus(404);
    }
}
