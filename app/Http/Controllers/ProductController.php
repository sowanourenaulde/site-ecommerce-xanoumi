<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Categorie;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.products.listproduct',compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        return view ('admin.products.newproduct',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $product = New Product;
            $product->image = $actualPath;
            $product->nom=$request->input('nom');
            $product->marque=$request->input('marque');
            $product->link3D=$request->input('3Dlink');
            $product->description=$request->input('description');
            $product->prix=$request->input('prix');
            $product->categorie_id=$request->input('categorie');
            $product->save();

            return redirect()->route('products.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $product=Product::find($product);
        $categories=Categorie::all();
        return view('admin.products.showproduct',array(
        'product' => $product,
        'categories'=>$categories,));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product=Product::find($product);
        $categories=Categorie::all();
        return view('admin.products.editproduct',array(
            'product' => $product,
            'categories' =>$categories,
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $product = Product::find($product);
            $product->image = $actualPath;
            $product->nom=$request->input('nom');
            $product->marque=$request->input('marque');
            $product->link3D=$request->input('link3D');
            $product->description=$request->input('description');
            $product->prix=$request->input('prix');
            $product->categorie_id=$request->input('categorie');
            $product->save();

            return redirect()->route('products.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product=Product::destroy($product);
        return redirect()->route('products.index');
    }
}
