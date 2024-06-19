<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index(){
        $cart = session()->get("cart",[]);
        $total = 0;
        foreach($cart as $watchID => $item){
            $total = $total + ($item["price"]*$item["quantity"]);
        }
        return view("frontEndProject.page.checkout",compact("cart","total"));
    }
    public function create(Request $request){


        $cart = session()->get("cart",[]);
        foreach($cart as $watchID => $item){
            $checkOut = new CheckOut;
            $checkOut->user_id=Auth::id();
            $checkOut->name = Auth::user()->name;
            $checkOut->email=Auth::user()->email;
            $checkOut->country=$request->country;
            $checkOut->address=$request->address;
            $checkOut->city=$request->city;
            $checkOut->state=$request->state;
            $checkOut->postal_code=$request->postal_code;
            $checkOut->calling_code=$request->calling_code;
            $checkOut->phone=$request->phone;


            $checkOut->watch_id=$watchID;
            $checkOut->quantity=$item["quantity"];
            $checkOut->save();
        }
        session()->forget('cart');
        return redirect()->route("shop.index")->with("message","your watch has been order successfully");
    }

}
