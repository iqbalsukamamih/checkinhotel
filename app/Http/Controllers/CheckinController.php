<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Guest;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('checkin.index', compact('guests'));
    }

    public function create()
    {
        return view('checkin.create');
    }

    public function store(Request $request)
    {
        $guest = Guest::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
        ]);

        $checkin = new Checkin();
        $checkin->guest_id = $guest->id;
        $checkin->checkin_date = $request->input('checkin_date');
        $checkin->checkin_time = $request->input('checkin_time');
        $checkin->save();

        return redirect()->route('checkin.index');
    }
}
