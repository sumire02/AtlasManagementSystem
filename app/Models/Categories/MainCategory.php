<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'main_category'
    ];

    public function subCategories(){
        return $this->hasMany('App\Models\Categories\SubCategory',
        'main_category_id','sub_category');// リレーションの定義中

    }

}
