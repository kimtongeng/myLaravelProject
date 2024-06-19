<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Watch;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
        $cart = session()->get('cart',[]);
        $total = 0;
        foreach($cart as $val){
            $total = $total + ($val["quantity"]*$val["price"]);
        }

        return view("frontEndProject.page.cart",compact("uniqueWatchesBrand","cart","total"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($watchId)
    {
        $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();

        if(Auth::id()){
            $watch = Watch::find($watchId);
            $cart = session()->get("cart",[]);
            if(isset($cart[$watchId])){
                $cart[$watchId]["quantity"]++;
            }
            else{
                $cart[$watchId] = [
                    "name" => $watch->name,
                    "quantity" => 1,
                    "price" => $watch->price,
                    "img"=>$watch->image,
                    "brand"=>$watch->brand
                ];

            }
            session()->put("cart",$cart);
            return redirect()->back()->with("message","your watch has been add to cart success");
        }
        else{
            return redirect()->back()->with("login","show");
        }


    }
    public function remove($watchId){
        $cart = session()->get("cart",[]);
        if(isset($cart[$watchId])){
            unset($cart[$watchId]);
            session()->put("cart",$cart);
        }
        return redirect()->back()->with("message","remove watch successfully");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {

    }

}
