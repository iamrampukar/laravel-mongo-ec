<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orderModel = [];
        if($request->session()->has('cart_item')){
            $orderModel = $request->session()->get('cart_item');
        }
        return view('order.index',compact('orderModel'));
    }

    public function removed(Request $request) {
        if($request->session()->has('cart_item')){
            $request->session()->flush();
        }
        return back();
    }

    public function checkout(Request $request) {
        $postData = $request->all();
        if($request->session()->has('cart_item')){
            $cartItem = $request->session()->get('cart_item');
            $cartItem["net_total"] = $postData['net_total'];
            $cartItem["shippingInfo"] = array(
                "full_name"=>$postData['full_name'],
                "address" =>$postData['address'],
                "credit_cart" =>$postData['credit_cart'],
                // "net_total"=> $postData['net_total'],
            );
            // dd($cartItem);
            Order::create($cartItem);
            $request->session()->flush();
            return redirect()->route('product.list')->with('success','Your cart item dispatch');
        }
        return back()->with('error','Record not saved');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
