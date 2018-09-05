<?php

namespace Tests\Feature;

use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * Test Category Rest API
     *
     * @return void
     */
    public function testRestAPI()
    {
        //record from model
        $categories = Category::where('id', 1)->first();

        $this->get('/api/categories')
            ->assertSee($categories);
    }
}
