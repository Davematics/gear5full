<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
class CartController extends Controller
{
    public function addToCart($slug)
    {
        $product = Ads::where('slug',$slug)->first();
 //dd($product->Vendor->state);
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $slug => [
                        "goods" => $product->title,
                        "quantity" => 1,
                        "amount" => $product->amount,
                        "photo" => $product->adsimages->display_photo_1,
                        "owner_id" => $product->user_id,
                        "state"=>$product->Vendor->state,
                        'lga'=>$product->Vendor->lga,
                        "status" => 0,
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$slug])) {
 
            $cart[$slug]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$slug] = [
            "goods" => $product->title,
            "quantity" => 1,
            "amount" => $product->amount,
            "photo" => $product->adsimages->display_photo_1,
            "owner_id" => $product->user_id,
            "state"=>$product->Vendor->state,
            'lga'=>$product->Vendor->lga,
            "status" => 0,
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
public function remove($slug)
    {
       
        
        if($slug) {
             session()->pull('cart.'.$slug);
             return redirect()->back()->with('success', 'Product removed from cart successfully!');
            }else{
                return redirect()->back()->with('success', 'No Item Selected');
            }
 
            
        }
}
