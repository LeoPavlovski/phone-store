<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listing all of the orders
        $orders =Order::with('user','phone.Category')->get();
        return OrderResource::collection($orders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $orderId = Str::uuid();

        foreach($request->all() as $item) {
            $orders = Order::create([
                'order_id' => $orderId,
                "user_id"=>$item['user_id'],
                "phone_id"=>$item['phone_id'],
                "tax"=>$item['tax'],
                "quantity"=>$item['quantity'],
                "price"=> $item['price'],
                "subtotal"=>$item['subtotal'],
            ]);
        }

        $order = Order::where('order_id', $orderId)->get();
        return OrderResource::collection($order);
    }

    /**
     * Display the specified resource.
     */
    public function show($order)
    {
        $order = Order::where('order_id', $order)->get();
        return OrderResource::collection($order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $orderId)
    {
        // $order = Order::where('order_id', $orderId)->get();

        
        // //Get back the update function
        // $order->updateOrCreate([
        //     "user_id"=>$request->user_id,
        //     "phone_id"=>$request->phone_id,
        //     "order_id"=>$request->order_id,
        //     "tax"=>$request->tax,
        //     "quantity"=>$request->quantity,
        //     "price"=>$request->price,
        //     "subtotal"=>$request->subtotal
        // ]);
        // return new OrderResource($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order)
    {
        //delete functionality
        $order = Order::where('order_id', $order)->delete();
        return response()->json([
            "Record has been deleted",
        ]);
      
    }
}
