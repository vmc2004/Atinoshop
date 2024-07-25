<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('client.home');
    }
    public function search(Request $request){
       $products = Product::query()->where('name', 'LIKE', '%'. $request. '%')->paginate(9);
        return view('client.shop', compact('propducts'));
    }
}
