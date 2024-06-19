<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use App\Models\Watch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopWatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watches = Watch::all();
        $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
        $lastProduct = Watch::latest()->first();
        $top3Product = Watch::orderBy("views","desc")->take(3)->get();
        return view("frontEndProject.index",compact("watches","uniqueWatchesBrand","lastProduct","top3Product"));
    }

    public function type($type){
        $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
        $brandWatch = Watch::where("type",$type)->get();
        $brand = null;
        return view("frontEndProject.page.watch",compact("uniqueWatchesBrand","brandWatch","brand" ,"type"));
    }
    public function brand($brand){
        $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
        $brandWatch = Watch::where("brand",$brand)->get();
        $type = null;
        return view("frontEndProject.page.watch",compact("uniqueWatchesBrand","brandWatch","brand" ,"type"));
    }
    public function typeBrand($brand,$type){

        $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
        $brandWatch = Watch::where("brand",$brand)->where("type",$type)->get();

        return view("frontEndProject.page.watch",compact("uniqueWatchesBrand","brandWatch","brand","type"));

    }

    public function order(){
        if(Auth::id()){
            $id = Auth::id();
            $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
            $orders = CheckOut::select("user_id","state","city","postal_code","country","address","phone","created_at",DB::raw("COUNT(watch_id) as numWatch"))
                    ->where("user_id",$id)
                    ->groupBy("user_id","country","state","city","postal_code" ,"address","phone","created_at")->orderBy("created_at", "desc")->get();

            return view("frontEndProject.page.historyOrder",compact("uniqueWatchesBrand","orders"));
        }
        return redirect()->route("shop.index");

    }
    public function productHistory($date){

        if(Auth::id()){
            $id = Auth::id();
            $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
            $decodeDate = urldecode($date);
            $dateTime = Carbon::parse($decodeDate);
            $orders = CheckOut::where("user_id",$id)->where('created_at', $dateTime)->with("watch")->get();
            $products = $orders->map(function($order){
                return [
                    "productId"=> $order->watch->id,
                    "item"=>$order->watch->image,
                    "name"=>$order->watch->name,
                    "brand"=>$order->watch->brand,
                    "quantity"=>$order->quantity,
                    "price"=>$order->watch->price,
                    "orderAt"=>$order->created_at
                ];
            });
            return view("frontEndProject.page.historyProudct",compact("products","uniqueWatchesBrand"));
        }
        return redirect()->route("shop.index");

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $watch = Watch::find($id);
        $watch->increment('views');
        $uniqueWatchesBrand = Watch::select("brand")->distinct()->get();
        $highlights = explode("\n",$watch->highlights);
        return view("frontEndProject.page.product",compact("watch","highlights","uniqueWatchesBrand"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
