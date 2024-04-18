<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShowproductController extends Controller
{
    public function showproduct(){

        $product_active = Product::where("product_from","1")
                                    ->simplePaginate(6);
        $lastedProduct_active = Product::where("product_from","1")
                                ->latest("title")->first();

        $product_strix = Product::where("product_from","2")
                                    ->simplePaginate(6);
        $lastedProduct_strix = Product::where("product_from","2")
                                ->latest("title")->first();

        return view('home.index',[
            "product_active"=>$product_active,"lastedProduct_active"=>$lastedProduct_active,
            "product_strix"=>$product_strix,"lastedProduct_strix"=>$lastedProduct_strix
        ]);

    }
    public function searchProduct(Request $request){

        $products = Product::where("title","LIKE","%$request->search%")->simplePaginate(6);
        $lastedProduct = Product::latest("title")->first();

        return view('home.search',["products"=>$products,"lastedProduct"=>$lastedProduct]);

    }
    public function singleProduct(string $id){
        $singleProduct = Product::find($id);
        $products = Product::where("product_from",$singleProduct->product_from)
                                    ->orderBy("id", "desc")
                                    ->simplePaginate(6);
        $lastedProduct = Product::where("product_from",$singleProduct->product_from)
        ->oldest("title")->first();
        return view('home.product',[
            "singleProduct"=>$singleProduct,
            "products"=>$products,
            "lastedProduct" => $lastedProduct
        ]);
    }
    public function userAccount() {
        if (auth()->check()) {
            $orders = Order::with("product")->withWhereHas("user",function($query){
                $query->where("id",Auth::user()->id);
            })->get();
            return view('home.account',['orders' => $orders]);
        }else{
            return redirect()->route('home');
        }
    }

    public function categoryProduct($categoryId)
    {

        $products = Product::join('categories', function ($join) use ($categoryId) {
            $join->whereRaw("JSON_CONTAINS(products.category_ids, CAST(categories.entity_id AS CHAR))")
                ->where('categories.entity_id', $categoryId);
        })->select('products.*')->simplePaginate(6);

        return view('home.category',compact('products'));
    }

}
