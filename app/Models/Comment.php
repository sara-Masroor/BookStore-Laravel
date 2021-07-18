<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id', 'product_id', 'comment',
];


    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function search($data){
        $comment=Comment::orderBy('id','DESC');
        if(sizeof($data)>0){
            if(array_key_exists('name',$data)){
                $comment=$comment->where('name','like','%'.$data['name'].'%');
            }
        }
        $comment=$comment->paginate(10);
        return $comment;
    }

}


