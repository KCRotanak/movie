<?php
  
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Soon;
use App\Models\Theater;
use App\Models\User;
use App\Models\Contact;
use App\Models\Slide;

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
        $soons = Soon::all();
        $slideOnes = Slide::select()
        ->where('id', '1')
        ->get();

        $slides = Slide::select()
        ->where('id', '>=', '2')
        ->get();

        // dd($slides);
        return view('frontend.homepage', compact('products', 'slides','slideOnes'));     
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
        $contact = Contact::get()->count();
        return view('adminHome',compact('product','soon','theater','user','contact'));
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