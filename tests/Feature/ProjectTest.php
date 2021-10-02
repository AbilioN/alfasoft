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
    public function a_contact_can_be_created()
    {
        $response = $this->post('/contact/create' , $this->contact);
        $response->assertStatus(200);
        // $this->assertDatabaseHas('contracts' , $this->contract);


    }
}
