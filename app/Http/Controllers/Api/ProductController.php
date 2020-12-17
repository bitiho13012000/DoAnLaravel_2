<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    protected $productRepository;
    public function __construct(Product $repository)
    {
        $this->productRepository = $repository;
    }

    public function index()
    {
        return api_success(
            array('data' => $this->productRepository->all())
        );
    }

    public function show($id)
    {
        $model = Product::findOrFail($id);
        return api_success(
            array('data' => $model)
        );
    }
    public function search(Request $request){
        $key_word = $request->input('q');
        $products = Product::where('name','like',"%$key_word%")->get();
        return api_success(
            array('data' => $products)
        );
    }
    public function create(Request $request){
        $atttributes = $request->all();
        return api_success(
            array('data' => $this->productRepository->create($atttributes))
        );
    }

}

