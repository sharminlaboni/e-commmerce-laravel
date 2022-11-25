<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Ramsey\Uuid\Uuid;

class FrontendController extends Controller
{
    public function index()
    {
        $popularProducts = Product::where('sold', '>', 500)->get();
        $newProducts = Product::whereDate('created_at', '>=', date('2022-10-01'))->get();
        return view('frontend.index', compact('popularProducts', 'newProducts'));
    }

    public function products()
    {
        $products = Product::paginate(10);
        return view('frontend.products', compact('products'));
    }

    public function categoryProduct(Category $category)
    {
        $products = $category->products()->paginate(10);
        return view('frontend.products', compact('products'));
    }

    public function productDetails(Product $product)
    {
        return view('frontend.productDetails', compact('product'));
    }

    public function getCart()
    {
        $items = Auth::user()->cartItems;
        return view('frontend.order_cart', compact('items'));
    }

    public function addToCart(Product $product)
    {
        $product->cart()->create([
            'user_id' => Auth::id(),
            'qty' => 1
        ]);

        return redirect()->back();
    }

    public function updateCartItem(Cart $cart, Request $request)
    {
        dd($request);
    }

    public function deleteCartItem(Cart $cart)
    {
        $cart->delete();
        return redirect()->back();
    }

    public function checkOut()
    {
        return view('frontend.checkout');
    }

    public function placeOrder(Request $request)
    {
        try {
            DB::beginTransaction();
            $cartItems = Auth::user()->cartItems;
            $order = Order::create([
                'invoice_number' =>  Uuid::uuid7(),
                'user_id' => Auth::id(),
                'status_id' => 1,
                'shipping_address' => $request->shipping_address,
                'contact_number' => $request->contact_number,
            ]);
            foreach ($cartItems as $item) {
                $order->order_details()->create([
                    'product_title' => $item->product->name,
                    'quantity' => $item->qty,
                    'unit_price' => $item->product->price,
                    'total_price' => (float)$item->qty * (float)$item->product->price
                ]);
            }
            foreach ($cartItems as $item) {
                $item->delete();
            }
            DB::commit();
        } catch (QueryException $e) {
            dd($e);
            DB::rollBack();
        }
        return redirect()->route('frontend.index');
    }
}
