<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\View\View;

class OfferController extends Controller
{
    public function index()
    {
        $rooms = Room::take(5)->where('offer', '<', 150)->orderBy('offer', 'asc')->get();
        
        return view('offers', ['rooms' => $rooms]);
    }
}
