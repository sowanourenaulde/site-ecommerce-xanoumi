<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    
    {
        $categories=Categorie::all();
        return view('admin.categories.listcategorie',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        return view('admin.categories.newcategorie',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
            $categorie = New Categorie;
            $categorie->libelle = $request->input('nom');
            $categorie->description = $request->input('desc_categorie');
            $categorie->save();

            return redirect()->route('categorie.create');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categorie)
    {
        $category=Categorie::find($categorie);
        return view('admin.categories.showcategorie',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categorie)
    {
        $cat=Categorie::find($categorie);
        $categories=Categorie::all();
         
        return view('admin.categories.editcategorie',array(
            'cat' =>$cat,
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
    public function update(Request $request, $categorie)
    {
      $cat=$categorie;

      
            $categorie = Categorie::find($cat);
            
            $categorie->libelle=$request->input('nom');
            $categorie->description = $request->input('desc_categorie');
            $categorie->save();
                    
            $categories=Categorie::all();
            return view('admin.categories.listcategorie',compact('categories'));
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categorie)
    {
        $cat= Categorie::destroy($categorie);

        return redirect()->route('categorie.index');
        

    }
}
