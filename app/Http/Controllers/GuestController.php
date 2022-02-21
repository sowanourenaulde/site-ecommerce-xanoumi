<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;

class GuestController extends Controller
{
    public function index(){
        $categories=Categorie::all()->take(7);
        $c_mostselleds = Categorie::Where('libelle','meilleures ventes')->get()->first();
        $c_mostasks = Categorie::Where('libelle','plus demandés')->get()->first();
        $c_bestoffers = Categorie::Where('libelle','meilleures offres')->get()->first();
  
        if($c_mostasks != null){
            $cmostasks = Product::Where('categorie_id',$c_mostasks->id)->get()->take(6);

        }
        else{
            $cmostasks = [];
        }
      

        if($c_mostselleds !=null){
            $cmostselleds = Product::Where('categorie_id',$c_mostselleds->id)->get()->take(6);

        }
        else{
            $cmostselleds = [];
        }

        if($c_bestoffers !=null){
            $cbestoffers = Product::Where('categorie_id',$c_bestoffers->id)->get()->take(4);

        }
        else{
            $cbestoffers = [];
        }
        

        return view('accueil',[
            'categories' => $categories,
            'cmostselleds'=> $cmostselleds,
            'mostasks' => $cmostasks,
            'cbestoffers' => $cbestoffers
        ]);

    }

    public function category($categorie){

        $categories=Categorie::all()->take(7);
        $category = Categorie::Where('libelle',$categorie)->get()->first();
        if($category != null){
            $products = Product::Where('categorie_id',$category->id)->get();

        }
        else{
            $products = [];
        }

        return view('categories.index',[
            'products' => $products,
            'categories' => $categories,
            'categorie' => $categorie
         ]);
    }

    public function infoProduct($id){
        $categories=Categorie::all()->take(7);
        $product = Product::find($id);

        return view('products.index',[
            'product' => $product,
            'categories' => $categories,
            
         ]);

  
    }


    public function listcategories(){
        $categories=Categorie::all()->take(7);
        $categoriesall=Categorie::all();
        return view('categories.list',[
            'categories' => $categories,
            'categoriesall' => $categoriesall
         ]);  
    }


}
