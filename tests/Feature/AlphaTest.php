<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlphaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/')
            ->assertSee('monkaS')
            ->assertDontSee('Beta');


        $response->assertStatus(200);
    }


    public function testClickForBeta()
    {
        $this->get('/alpha')
            ->assertSee('Next')
            ->assertSee('/beta');
    }
}
