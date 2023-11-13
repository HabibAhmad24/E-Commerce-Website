<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Catagory;

class UserController extends Controller
{

   public function index()
   {
    $catagory = Catagory::latest()->take(8)->get();
return view('index',['catagories'=>$catagory]);
   }
   public function cart()
   {
       return view('cart');
   }
   public function shop()
   {
    $catagory = Catagory::get();
    return view('shop',['catagories'=>$catagory]);
   }

   public function addtocart(Catagory $catagory)
   {
       $cart = session()->get('cart');

       if (!$cart) {
           $cart = [
               $catagory->id => [
                   'name' => $catagory->name,
                   'quantity' => 1,
                   'price' => $catagory->price,
                   'image' => $catagory->image,
               ],
           ];
           session()->put('cart', $cart);
           return redirect()->route('cart')->with('success', 'Added to cart');
       }

       if (isset($cart[$catagory->id])) {
           $cart[$catagory->id]['quantity']++;
       } else {
           $cart[$catagory->id] = [
               'name' => $catagory->name,
               'quantity' => 1,
               'price' => $catagory->price,
               'image' => $catagory->image,
           ];
       }

       session()->put('cart', $cart);
       return redirect()->route('cart')->with('success', 'Added to cart');
   }

   public function remove($id)
   {
       $cart = session()->get('cart');

       if (isset($cart[$id])) {
           unset($cart[$id]);
           session()->put('cart', $cart);
       }

       return redirect()->back()->with('success', 'Removed from cart');
   }
}
