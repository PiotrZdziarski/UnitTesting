<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Product;


class ProductController extends Controller
{
    /**
     * Return all products in json
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $products = Product::all();

        return ProductResource::collection($products);
    }
}
