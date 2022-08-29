<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use MongoDB\BSON\ObjectID;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productModel = Product::paginate(3);
        return view('product.index',compact('productModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productModel = new Product();
        $categoryList = ProductCategory::get();
        return view('product.create',compact('productModel','categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $postData = $request->validated();
        $postData['user_info']  = $this->userInfo();
        $postData['category']   = ProductCategory::find($postData['category'])->toArray();
        $postData['comment']   = $this->comments();

        $productModel = Product::create($postData);
        return back()->with("success","Your recored have been saved.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delete_flag = 1;
        $productModel = Product::raw(function ($collection) use ($id,$delete_flag){
            return $collection->aggregate(array(
                array(
                    '$unwind' => array(
                        'path' => '$comment',
                    )
                ),
                array(
                    '$match' => array(
                        '_id' => new ObjectID($id),
                    )
                ),
                array(
                    '$limit' => 2
                ),                           
            ));
        })->toArray();
        return view('product.show',compact('productModel'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
