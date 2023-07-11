<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\View\View;

class RoomController extends Controller
{
    public function index(): View
    {
        return view('rooms', ['rooms' => Room::take(9)->get()]);
    }
    
    public function show(string $id): View
    {
        return view('room_details', ['room' => Room::findOrFail($id)]);
    }
}
