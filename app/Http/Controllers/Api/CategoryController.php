<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    protected $categoryRepository;
    public function __construct(Category $repository)
    {
        $this->categoryRepository = $repository;
    }

    public function index()
    {
        return api_success(
            array('data' => $this->categoryRepository->all())
        );
    }
    public function show($id)
    {
        $cate = Category::findOrFail($id);
        return api_success(
            array('data' => $cate->products)
        );
    }
    public function search(Request $request,$id){
        $key_word = $request->input('q');
        $products = Product::where('category_id', $id)->where('name', 'like', "%$key_word%")->get();
        return api_success(
            array('data' => $products)
        );
    }
    public function create(Request $request){
        $atttributes = $request->all();
        return api_success(
            array('data' => $this->categoryRepository->create($atttributes))
        );
    }
}
