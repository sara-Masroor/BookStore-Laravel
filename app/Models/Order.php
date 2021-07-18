<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id', 'total','tracking',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function search($data){
        $order=Order::orderBy('id','DESC');
        if(sizeof($data)>0){
            if(array_key_exists('name',$data)){
                $order=$order->where('name','like','%'.$data['name'].'%');
            }
        }
        $order=$order->paginate(10);
        return $order;
    }
}
