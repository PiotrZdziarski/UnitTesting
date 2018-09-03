<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BetaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/beta')
            ->assertSee('Beta')
            ->assertDontSee('Alpha');
    }

    public function testClickForAlpha()
    {
        $this->get('/beta')
            ->assertSee('Previous')
            ->assertSee('/alpha');
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

}
