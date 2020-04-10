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

    public function testDoesNotLinkToDraftPages()
    {
        $page = factory(AboutPage::class)->create(['published' => true]);

        $visiblePage = factory(AboutPage::class)->create(['published' => true]);

        $draftPage = factory(AboutPage::class)->create(['published' => false]);

        $this->assertNotTrue($draftPage->published);

        $response = $this->get('/about/'.$page->slug);

        $response->assertStatus(200);
        $response->assertSee($page->header);
        $response->assertSee($visiblePage->slug);
        $response->assertDontSee($draftPage->slug);
    }

    public function testOtherPageCardsAreViewableOnAboutPages()
    {
        $pages = factory(AboutPage::class, 3)->create(['published' => true]);

        $response = $this->get('/about/'.$pages[0]->slug);
        $response->assertStatus(200);

        // Should see two cards for other pages; "Find out more" is the button text for each card
        $response->assertSeeTextInOrder(['Find out more', 'Find out more']);
    }
}
