<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Return all products in json
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $categories = Category::all();

        $productsCount = count($products);
        $categoriesCount = count($categories);

        for($i = 0; $i < $productsCount; $i++) {
            $currentDate = date('d.m.Y', strtotime($products[$i]->created_at));

            for($j = 0; $j < $categoriesCount; $j++) {
                if($products[$i]->category_id == $categories[$j]->id) {
                    $products[$i] = collect($products[$i])->merge(['category'
                        => str_replace('.', '', $categories[$j]->category)]);
                    break;
                }
            }
            $products[$i] = collect($products[$i])->merge(['date' => $currentDate]);
        }

        return ProductResource::collection($products);
    }

    /**
     * Store new product to database
     * @param Request $request
     * @return ProductResource
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $price = $request->input('price');

        $product = new Product;
        $product->title = $title;
        $product->price = $price;
        $product->category_id = $category_id;

        if($product->save()) {
            return new ProductResource($product);
        }
    }
}
