<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'brand', 'body','price','image','sampleFile','originalFile',
        'author_id','cat','comment',
        //'user_id','discount',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public static function scopeSearch(Builder $query,$search){
        if($search){
           return $query->where('name','like','%'.$search.'%');
        }

        return $query;
    }

}


