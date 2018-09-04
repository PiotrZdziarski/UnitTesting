<?php

namespace Tests\Feature;

use App\Category;
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
        $productModel = Product::where('id', 1)->first();

        $productTitle = $productModel->title;
        $productCategoryId = $productModel->category_id;


        //test if category exists in database idk for what xd im so bad at testing
        $categoryModel = Category::where('id', $productCategoryId)->first();
        $categoryId = $categoryModel->id;
        $this->assertEquals($productCategoryId, $categoryId);

        //test if rest api works and if category name was added to rest api
        $categoryName = $categoryModel->category;
        //need to delete dot like in controller
        $categoryName = str_replace('.', '', $categoryName);

        $this->get('/api/products')
            ->assertSee($productTitle)
            ->assertSee($categoryName);
    }
}
