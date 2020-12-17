<?php
    namespace App\Repositories;
    use App\Models\Product;

    class ProductRepository {

        protected $pro;
        public function __construct(Product $pro)
        {
            $this->pro = $pro;
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
?>
