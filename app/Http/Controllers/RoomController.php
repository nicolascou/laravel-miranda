<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\View\View;

class RoomController extends Controller
{
    public function index(Request $request): View
    {
        if ($request->query('check_in') && $request->query('check_out')) {
            $bookings = Booking::all();
            $checkin = htmlentities($request->query('check_in'));
            $checkout = htmlentities($request->query('check_out'));

            $availableRooms = array_filter(Room::all()->toArray()   , function($room) use ($checkin, $checkout, $bookings) {
                foreach ($bookings as $booking) {
                    if ($booking['room_id'] === $room['id']) {
                        if ($booking['check_out'] > $checkin && $booking['check_in'] < $checkout) {
                            return false;
                        }
                    }
                }
                return true;
            });

            return view('rooms', ['rooms' => array_slice($availableRooms, 0, 9)]);
        }

        return view('rooms', ['rooms' => Room::take(9)->get()]);
    }   
    
    public function show(string $id): View
    {
        return view('room_details', ['room' => Room::findOrFail($id)]);
    }
}
