<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Cloudder;
use Carbon\Carbon;

class ProductsController extends Controller
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
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


        if($request->cover_image != null){
           
            $cover_image = cloudinary()->upload($request->cover_image->getRealPath())->getSecurePath();

        }else{
            $cover_image = '';
        }

        if($request->image1 != null){
           
            $image1 = cloudinary()->upload($request->image1->getRealPath())->getSecurePath();

        }else{
            $image1 = '';
        }


        if($request->image2 != null){
           
            $image2 = cloudinary()->upload($request->image2->getRealPath())->getSecurePath();

        }else{
            $image2 = '';
        }


        DB::beginTransaction();

        try {

            $products = Products::firstOrCreate([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'quantity' => $request->quantity,
                'price' => $request->price,
    
               

                'cover_image' => $cover_image,
                'image1' => $image1,
                'image2' => $image2,
            ]);
    
            DB::commit();


            $response = [
                "message" => 'Product has been added Successfully'
            ];
             return redirect('inventory')->with($response );
            

        } catch (\Throwable $th) {
            DB::rollBack();
             return redirect()->back()->with('error', 'OOPS something went wrong');
        } 

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
