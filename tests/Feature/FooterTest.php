<?php

namespace Tests\Feature;

use Tests\TestCase;

class FooterTest extends TestCase
{
    /**
     * Test existence of Footer.
     *
     * @return void
     */
    public function testFooterOnHomepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSeeTextInOrder(['Follow us', 'Website hosted and designed by Vegan Hacktivists with love', 'Support us on Patreon']);
    }
}
