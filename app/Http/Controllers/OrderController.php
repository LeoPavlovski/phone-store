<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Return the Category
        $orders =Order::all();
        return view('orders',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orderData = json_decode($request->getContent(), true);

if ($orderData) {
    foreach ($orderData as $item) {
        $orderId = Str::uuid(); // Generate a unique UUID for each order

        try {
            $order = Order::create([
                'order_id' => $orderId,
                'tax' => $item['tax'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'subtotal' => $item['subtotal'],
            ]);

            // Rest of your code

        } catch (\Exception $e) {
            // Handle the exception or log the error message
            dd($e->getMessage());
        }
    }
}

return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show($order)
    {
        //Get the element by id
        $orders = Order::where('order_id', $order)->get();
        
        return view('order.show', compact('orders'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        // return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        // $order->update([
        //     "name" => $request->name,
        //     "subtotal"=>$request->subtotal,
        //     "tax"=>$request->tax,
        //     "price"=>$request->price
        // ]);
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order)
    {
       Order::where('order_id', $order)->delete();
        return redirect()->back();
    }
}
