<?php

namespace Tests\Feature;

use App\Http\Resources\ProductResource;
use App\Product;
use Tests\TestCase;

class productTest extends TestCase
{
    /**
     * Testing RestAPI.
     *
     * @return void
     */
    public function testRestAPI()
    {
        $productTitleModel = Product::where('id', 1)->first()->title;

        $this->get('/api/products')
            ->assertSee($productTitleModel);
    }
}
