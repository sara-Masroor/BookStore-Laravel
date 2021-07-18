<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];

    public function product(){
        return $this->hasMany('App\Product');
    }

    public static function search($data){
        $category=Category::orderBy('id','DESC');
        if(sizeof($data)>0){
            if(array_key_exists('name',$data)){
                $category=$category->where('name','like','%'.$data['name'].'%');
            }
        }
        $category=$category->paginate(10);
        return $category;
    }
}
