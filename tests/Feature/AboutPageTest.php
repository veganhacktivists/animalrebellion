<?php

namespace Tests\Feature;

use App\Models\AboutPage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutPageTest extends TestCase
{
    use RefreshDatabase; // run migrations with this test

    public function testIsViewableBySlug()
    {
        $page = factory(AboutPage::class)->create(['published' => true]);

        $this->assertTrue($page->published);

        $response = $this->get('/about/'.$page->slug);

        $response->assertStatus(200);
        $response->assertSee($page->title);
        $response->assertSee($page->header);
        $response->assertSee($page->slug);
    }

    public function testIsNotViewableUnlessPublished()
    {
        $page = factory(AboutPage::class)->create();

        $this->assertNotTrue($page->published);

        $response = $this->get('/about/'.$page->slug);

        $response->assertStatus(404);
        $response->assertDontSee($page->title);
        $response->assertDontSee($page->header);
        $response->assertDontSee($page->slug);
    }
}
