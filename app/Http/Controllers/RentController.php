<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Location;
use App\Models\Vehicule;


class RentController extends Controller
{
    public function index(){
            $cars=Vehicule::all();
            $categories=Categorie::all();
            $locations=Location::all();
            $users=User::all();

            return view('admin.locations.rent',array(
                'cars'=>$cars,
                'categories'=>$categories,
                'locations'=>$locations,
                'users'=>$users,
            ));

    }
}
