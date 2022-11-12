<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'data_product' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $nama   = $request->input('nama_produk');
        $harga  = $request->input('harga_produk');
        $stok   = $request->input('stok');
        
        Product::create([
            'id_kategori' => 1,
            'nama_produk' => $nama,
            'harga_produk' => $harga,
            'stok' => $stok
        ]);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $products = Product::find($product);
        // return view('products.edit-product', [
        //     'data' => $product
        // ]);
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
        return view('products.edit-product', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request);
        $rules = [
            'id_kategori' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok' => 'required'
        ];
        $validatedData = $request->validate($rules);
        Product::where('id', $product->id)->update($validatedData);
        return redirect('/products');
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
        // dd($product);
        // dd($product->toArray());
        Product::destroy($product->id);
        return redirect('/products')->with('success','Data berhasil dihapus');
    }
}
