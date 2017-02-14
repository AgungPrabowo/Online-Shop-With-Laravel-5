<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Kategori;
use App\Product;

class ProductController extends Controller
{

    public function optKategoris()
    {
        foreach(Kategori::all() as $kategori)
        {
            $rowKategori[$kategori->id] = $kategori->name;
        }

        return $rowKategori;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(1);
        return view('admins.products.index', compact('products'),['i' => 1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        // create array for dropdown menu
        foreach($kategoris->all() as $kategori)
        {
            $rowKategori[$kategori->id] = $kategori->name;
        }
        return view('admins.products.create', compact('rowKategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('images');

        // validasi data
        $this->validate($request, [
            'name' => 'required',
            'kategori' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'images' => 'required|mimes:jpeg,png',
            'stock' => 'required|numeric'
        ]);

        // entry product
        $product = new Product();
        $product->kategori_id = $request->input('kategori');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->images = $file->getClientOriginalName();
        $product->stock = $request->input('stock');
        
        // move file
        Storage::disk('public')->put($file->getClientOriginalName(), File::get($file));

        // save entry
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admins.products.show', compact('product','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $kategoris = $this->optKategoris();
        return view('admins.products.edit', compact('product','kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $product = Product::find($id);

        $this->validate($request, [
            'name' => 'required',
            'kategori_id' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'stock' =>'required|numeric'
        ]);

        // if changing image
        if($image)
        {
            // validasi image
            $this->validate($request, ['images' => 'mime:jpeg,png']);

            $product->kategori_id = $request->input('kategori_id');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->description = $request->input('description');
            $product->images = $image->getCLientOriginalName();
            $product->stock = $request->input('stock');

            // move image
            Storage::disk('public')->put($image->getClientOriginalName(), File::get($image));

            // save entry
            $product->save();

            return redirect()->route('product.index');
        }

        // if image not change
        $product->update($request->all());
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
