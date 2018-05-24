<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public static function getAllProduct(){
        $data = Product::all();
        //var_dump($data);die;
        return view("listProduct",compact("data"));
    }
    
    public function create() {
        return view("createProduct");
    }
    
    public function store(Request $req){
        dd($req->all());die;
        if($req->all()){
            foreach ($req->all() as $key => $val) {
                echo $key." - ".$val."<br/>";
            }
        }
    }
}
