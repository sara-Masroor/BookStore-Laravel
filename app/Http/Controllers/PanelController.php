<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function Buys(Request $request)
    {

//        $orders=Order::latest()->with(["user","product"])->where(['user_id',auth()->id()])->paginate(15);
        $orders=auth()->user()->orders()->paginate(15);
        $comments=auth()->user()->comments()->paginate(15);
        return view('userPanel',compact('orders','comments'));
    }
}
