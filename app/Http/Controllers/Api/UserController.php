<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(User $repository)
    {
        $this->userRepository = $repository;
    }

    public function index()
    {
        return api_success(
            array('data' => $this->userRepository->all())
        );
    }

    public function show($id)
    {
        $model = User::findOrFail($id);
        return api_success(
            array('data' => $model)
        );
    }
    public function search(Request $request){
        $key_word = $request->input('q');
        $user = User::where('name','like',"%$key_word%")->get();
        return api_success(
            array('data' => $user)
        );
    }
    public function create(Request $request){
        $atttributes = $request->all();
        return api_success(
            array('data' => $this->productRepository->create($atttributes))
        );
    }

}

