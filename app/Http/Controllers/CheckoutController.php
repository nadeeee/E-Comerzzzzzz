<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Mail\CheckoutMail;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store (){
        $carts = Cart::where('user_id', Auth::user()->id);

        $cartUsers = $carts->get();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);

        foreach ($cartUsers as $cart) {
            $transaction->detail()->create([
                'product_id'=>$cart->product_id,
                'qty' => $cart->qty
            ]);
        }

        Mail::to($carts->first()->user->email)->send(new CheckoutMail($cartUsers));
        Cart::where('user_id', Auth::user()->id)->delete();

        // $carts->delete();
        return redirect('/');


    }


}
