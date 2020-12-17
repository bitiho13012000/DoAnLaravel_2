<?php
    namespace App\Repositories;
    use App\Models\Category;

    class CategoryRepository {

        protected $cate;
        public function __construct(Category $cate)
        {
            $this->cate = $cate;
        }
        public function all(){
            return $this->cate->all();
        }
        public function create($attributes){
            return $this->cate->create($attributes);
        }
        public function find($attributes){

        }
        public function update($attributes){

        }
        public function delete($id){

        }

    }
?>
