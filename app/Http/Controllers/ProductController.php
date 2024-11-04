<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();        
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_types = ProductType::all();
        return view('products.create', compact('product_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'qty' => 'required',
            'selling_price' => 'required',
            'buying_price' => 'required',
            'product_type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar

        ]);

        $imagePath = $request->file('image')->store('products', 'public');
        dd($request->all);
        $product = Product::create([
            'product_name' => $request->product_name,
            'qty' => $request->qty,
            'selling_price' => $request->selling_price,
            'buying_price' => $request->buying_price,
            'product_type_id' => $request->product_type,
            'image_path' => $imagePath, // Simpan jalur gambar
        ]);
    

         return redirect()->route('products.index')->withSuccess('Product has been successfully created.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $product_types = ProductType::all();
        return view('products.edit', compact('product_types', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validasi form termasuk gambar
        $request->validate([
            'product_name' => 'required',
            'qty' => 'required',
            'selling_price' => 'required',
            'buying_price' => 'required',
            'product_type' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar opsional
        ]);
          // Jika ada file gambar baru, simpan file tersebut
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image_path = $imagePath; // Perbarui jalur gambar
    }
   // Update data produk
    // Mengisi atribut produk dari request
        $product->product_name = $request->product_name;
        $product->qty = $request->qty;
        $product->selling_price = $request->selling_price;
        $product->buying_price = $request->buying_price;
        $product->product_type_id = $request->product_type;

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Simpan file gambar ke folder 'products' di disk publik
            $imagePath = $request->file('image')->store('products', 'public');

            // Simpan path gambar di kolom 'image_path' produk
            $product->image_path = 'storage/products/' . basename($imagePath);
        }

        // Simpan data produk ke database
        $product->save();


        return redirect()->route('products.index')->withSuccess('Great! You have sucessfully Update '.$product->product_name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->withSuccess('Great! You have sucessfully Deleted '.$product->product_name);
    }

    public function tampilProduk()
    {
        $products = Product::all();
        return view('products.tampil', compact('products'));
    }
}