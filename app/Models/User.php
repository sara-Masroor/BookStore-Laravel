<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'money',
        //'admin_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function orders(){
        return $this->hasMany(Order::class,'user_id');
    }

    public static function search($data){
        $user=User::orderBy('id','DESC');
        if(sizeof($data)>0){
            if(array_key_exists('name',$data)){
                $user=$user->where('name','like','%'.$data['name'].'%');
            }
        }
        $user=$user->paginate(10);
        return $user;
    }

}
