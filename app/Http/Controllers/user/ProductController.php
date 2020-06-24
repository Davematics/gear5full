<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ads;
use App\Category;
class ProductController extends Controller
{
    public function index()
    {
        $categories=Category::paginate(9);
        $adss416x420=Ads::where('dimension','416 X 420')->inRandomOrder()->paginate(3);
        $adss320x300=Ads::where('dimension','320 X 300')->inRandomOrder()->first();
        $adss212x200=Ads::where('dimension','212 X 200')->inRandomOrder()->paginate(6);
        $adss212x2002=Ads::where('dimension','212 X 200')->inRandomOrder()->paginate(6);
        $adss212x2003=Ads::where('dimension','212 X 200')->inRandomOrder()->paginate(6);
        $recentAds=Ads::inRandomOrder()->paginate(10);
        return view('welcome',compact('adss416x420',
        'adss320x300','adss212x200','adss212x2002','adss212x2003','recentAds','categories'));
    }

    public function single($slug)
    {
if(Category::where('slug',$slug)->exists()){
    $category=Category::where('slug',$slug)->first(['category_name']);
   // dd($category->category_name);
    $products=Ads::where('category',$category->category_name)->get();
    return view('category.products',compact('products','category'));  
}else{
$ads=Ads::where('slug',$slug)->firstOrFail();
        return view('product.single',compact('ads'));
    }
}

public function vendorProducts($id)
    {
   // dd($category->category_name);
    $products=Ads::where('user_id',base64_decode($id))->get();
    $product=Ads::where('user_id',base64_decode($id))->firstorfail();
        return view('product.vendor-products',compact('products','product'));
    }

}