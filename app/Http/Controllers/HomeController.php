<?php
  
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Soon;
use App\Models\Theater;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        // $newproducts = Product::select()
        // ->where('id', '>=', 5)
        // ->get();
        return view('frontend.homepage', compact('products'));     
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $product = Product::get()->count();
        $soon = Soon::get()->count();
        $theater = Theater::get()->count();
        $user = User::get()->count();
        return view('adminHome',compact('product','soon','theater','user'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}