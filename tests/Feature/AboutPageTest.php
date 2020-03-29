<?php

namespace Tests\Feature;

use App\Models\AboutPage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutPageTest extends TestCase
{
    public function testIsViewableBySlug()
    {
        $page = factory(AboutPage::class)->create();

        $response = $this->get('/about/'.$page->slug);

        $response->assertStatus(200);
    }
}
