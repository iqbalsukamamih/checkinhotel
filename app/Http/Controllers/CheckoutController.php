<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Guest;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('checkout.index', compact('guests'));
    }

    public function create()
    {
        return view('checkout.create');
    }

    public function store(Request $request)
    {
        $guest = Guest::find($request->input('guest_id'));

        $checkout = new Checkout();
        $checkout->guest_id = $guest->id;
        $checkout->checkout_date = $request->input('checkout_date');
        $checkout->checkout_time = $request->input('checkout_time');
        $checkout->save();

        return redirect()->route('checkout.index');
    }
}
