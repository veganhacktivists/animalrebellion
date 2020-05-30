<?php

namespace Tests\Feature;

use App\Models\Faq;
use App\Models\PressContact;
use App\Models\TeamContact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test contact page existence
     *
     * @return void
     */
    public function testContactPageExists()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function testContactPageShowsPressContacts()
    {
        $pressContact = factory(PressContact::class)->create();
        $response = $this->get('/contact');
        $response->assertSeeTextInOrder([$pressContact->name, $pressContact->mobile_number, $pressContact->email]);
    }

    public function testContactPageShowsTeamContacts()
    {
        $teamContact = factory(TeamContact::class)->create();
        $response = $this->get('/contact');
        $response->assertSeeTextInOrder([$teamContact->team_name, $teamContact->email]);
    }

    public function testContactPageShowsFaqs()
    {
        $faq = factory(Faq::class)->create();
        $response = $this->get('/contact');
        $response->assertSeeTextInOrder([$faq->question, $faq->answer]);
    }
}

