<?php

namespace Tests\Feature;

use App\Models\Contract;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();

        $this->contract = factory(Contract::class)->make();
    }

    /** @test */
    public function a_project_can_be_created()
    {
        
        $response = $this->post(route('contract.create') , $this->contract);
        $response->assertStatus(200);
        $this->assertDatabaseHas('contracts' , $this->contract);


    }
}
