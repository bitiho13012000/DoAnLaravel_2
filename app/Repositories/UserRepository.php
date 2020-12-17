<?php
    namespace App\Repositories;
    use Illuminate\Foundation\Auth\User;

    class UserRepository {

        protected $us;
        public function __construct(User $us)
        {
            $this->us = $us;
        }
        public function all(){
            return $this->pro->all();
        }
        public function create($attributes){
            return $this->pro->create($attributes);
        }
        public function find($attributes){

        }
        public function update($attributes){

        }
        public function delete($id){

        }

    }
