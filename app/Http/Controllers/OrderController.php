<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use App\Models\Watch;
use Carbon\Carbon;
use Illuminate\Console\View\Components\Warn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Diff\Chunk;

class OrderController extends Controller
{
    public function index(){
        $currentDate = Carbon::now()->format('Y-m-d');


        $results = CheckOut::select('user_id',"name","email",DB::raw('COUNT(DISTINCT created_at) as order_at'))
        ->whereDate('created_at', $currentDate)
        ->groupBy('user_id',"name","email")
        ->get();
        return view("admin.order.index",compact("results","currentDate"));
    }
    public function date(Request $request){
        $currentDate = $request->date;

        $results = CheckOut::select('user_id',"name","email",DB::raw('COUNT(DISTINCT created_at) as order_at'))
        ->whereDate('created_at', $currentDate)
        ->groupBy('user_id',"name","email")
        ->get();
        return view("admin.order.index",compact("results","currentDate"));
    }

    public function customer($userId,$date){

        $dateDecode = urldecode($date);
        $date = Carbon::parse($dateDecode);
        $customer = CheckOut::where("user_id",$userId)->where('created_at', $date)->first();



        return view("admin.order.show",compact("customer",));

    }
    public function order($userId,$date){


        $orderTime = CheckOut::select('user_id',"name","email","country","city","phone","created_at",DB::raw('COUNT(DISTINCT watch_id) as watchNum'))
        ->where('user_id', $userId)->whereDate('created_at', $date)
        ->groupBy('user_id',"name","email","country","city","phone","created_at")
        ->get();



        return view("admin.order.viewOrder",compact("orderTime", ));
    }
    public function product($userId,$date){

        $decodeDate = urldecode($date);
        $dateTime = Carbon::parse($decodeDate);
        $orders = CheckOut::where("user_id",$userId)->where('created_at', $dateTime)->with("watch")->get();

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

        return view("admin.order.productOrder",compact("products",));
    }
    public function showProduct($id){
        $watch = Watch::find($id);
        $highlights = explode("\n", $watch->highlights);

        return view("admin.order.showProduct", compact("watch", "highlights"));
    }
}

