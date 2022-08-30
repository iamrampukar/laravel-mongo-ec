<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Product;
use App\Http\Requests\StoreProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $itemCount = $request->session()->has('cart_item');
        if (!empty($itemCount)) {
            $itemCount = count($request->session()->get('cart_item'));
        }
        $productModel = Product::find($id);
        return view('product_detail.show',compact('productModel','itemCount'));
    }

    public function addCart(Request $request, $id)
    {
        $productModel = Product::find($id);
        $postData = $request->all();
        // dd($postData['qty']);
        $itemCount  = 0;
        // $request->session()->flush();dd('');
        // dd($request->session()->get('cart_item'));
        if($request->session()->has('cart_item')) {
            $cartItem = $request->session()->get('cart_item');
            $tempItem = null;
            if(!array_key_exists($productModel->id,$cartItem)){
                $tempItem[$productModel->id] = array(
                    'id'=>$productModel->id,
                    'product_name_en' => $productModel->product_name_en,
                    'category' => $productModel->category,
                    'price' => $productModel->price,
                    'qty' => $postData['qty'],
                    'total' => intval($productModel->price) * intval($postData['qty']),
                );
            }
            if (!is_null($tempItem)) {
                $cartItem+=$tempItem;
                $request->session()->put('cart_item',$cartItem);
            }
        } else {
            $addItem[$productModel->id] = array(
                'id'=>$productModel->id,
                'product_name_en' => $productModel->product_name_en,
                'category' => $productModel->category,
                'price' => $productModel->price,
                'qty' => $postData['qty'],
                'total' => intval($productModel->price) * intval($postData['qty']),
            );
            $request->session()->put('cart_item', $addItem);
        }
        $itemCount = count($request->session()->get('cart_item'));
        return view('product_detail.show',compact('productModel','itemCount'));
    }

    private function __productCalculation($productModel) {
        dd($productModel);
        return array(

        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductDetailRequest  $request
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductDetailRequest $request, ProductDetail $productDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductDetail $productDetail)
    {
        //
    }
}
