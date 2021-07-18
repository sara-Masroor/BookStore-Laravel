<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'email',
       // 'password',
    ];
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

//    public static function search($data){
//        $author=Author::orderBy('id','DESC');
//        if(sizeof($data)>0){
//            if(array_key_exists('name',$data)){
//                $author=$author->where('name','like','%'.$data['name'].'%');
//            }
//        }
//        $author=$author->paginate(30);
//        return $author;
//    }

    public static function scopeSearch(Builder $query,$search){
        if($search){
            return $query->where('name','like','%'.$search.'%');
        }

        return $query;
    }
}
