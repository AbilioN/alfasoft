<?php

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();

        $this->contact = factory(Contact::class)->make()->toArray();
    }
    /** @test */

    public function contacts_can_be_listed()
    {
        $response = $this->get('/');

    }
    /** @test */
    public function a_contact_can_be_created()
    {
        $response = $this->post('/contact/create' , $this->contact);
        $this->assertDatabaseHas('contacts' , $this->contact);
        $response->assertRedirect('/');



    }
    /** @test */
    public function a_contact_can_be_deleted()
    {
        $contact = factory(Contact::class)->create()->toArray();
        $response = $this->post(route('contact.delete') , ['contact' => $contact['id']]);
        $response->assertRedirect('/');
    }

}
