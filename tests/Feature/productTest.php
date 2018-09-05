<?php

namespace Tests\Feature;

use App\Category;
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


    /**
     * Test product storing
     * @return void
     */
    public function testAddingProduct()
    {
        //generate random table row
        $string = str_random(10);
        $price = rand(1,1000);
        $category_id = rand(1,10);

        //perform a post request
        $response = $this->json('POST','/api/product_store', [
            'title' => $string,
            'price' => $price,
            'category_id' => $category_id
        ]);

        //check if everything is good
        $response
            ->assertStatus(201)
            ->assertJson([
                "data"  => [
                    "title" => $string,
                    "price" => $price,
                    "category_id" => $category_id
                ]
            ]);

        //delete product
        //get id of added product
        $id =  $response->getOriginalContent()->id;

        //delete it
        Product::where('id', $id)->delete();
    }
}
