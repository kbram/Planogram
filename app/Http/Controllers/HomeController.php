<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Aisle;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Bay;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function babyProducts()
    {
        $user=Auth::user();
        $department=Department::find(1);
        $products=Product::where('department_id',1)->get();
        $aisles = Aisle::where('department_id',1)->get();
        $bays=collect();
        foreach($aisles as $aisle){
            $b = Bay::where('aisle_id',$aisle->id)->get();
            $bays=$bays->merge($b);
        }
        $stocks = Stock::where('department_id',1)->get();
        return view('home',compact('aisles','user','bays','stocks','products','department'));
    }
    public function beveragesProducts()
    {
        $user=Auth::user();
        $department=Department::find(2);
        $products=Product::where('department_id',2)->get();
        $aisles = Aisle::where('department_id',2)->get();
        $bays=collect();
        foreach($aisles as $aisle){
            $b = Bay::where('aisle_id',$aisle->id)->get();
            $bays=$bays->merge($b);
        }
        $stocks = Stock::where('department_id',2)->get();

        return view('home',compact('aisles','user','bays','stocks','products','department'));
    }
    public function clothsProducts()
    {
        $user=Auth::user();
        $department=Department::find(3);
        $products=Product::where('department_id',3)->get();
        $aisles = Aisle::where('department_id',3)->get();
        $bays=collect();
        foreach($aisles as $aisle){
            $b = Bay::where('aisle_id',$aisle->id)->get();
            $bays=$bays->merge($b);
        }
        $stocks = Stock::where('department_id',3)->get();
        return view('home',compact('aisles','user','bays','stocks','products','department'));
    }
}
