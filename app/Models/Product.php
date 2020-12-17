<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';

    protected $fillable = ['name','status','slug','image','price','sale_price','category_id','content'];

    public function cat(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}


?>
