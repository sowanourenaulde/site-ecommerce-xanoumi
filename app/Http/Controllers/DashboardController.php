<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
       

        public function index(){

           $users=User::count();
           $products=Product::count();
           $categories=Categorie::count();
            
           $created_car=Product::all('created_at')->sortByDesc('created_at')->first();
           $created_user=User::all('created_at')->sortByDesc('created_at')->first();
           $created_categorie=Categorie::all('created_at')->sortByDesc('created_at')->first();

          
            
           return view ('admin.dashboard',array(
               'users' => $users,
               'products' =>$products,
            'categorie'=>$categories,
            'car_created'=>$created_car,
            'user_created'=>$created_user,
            'categorie_created'=>$created_categorie,
           ));

        }
}
