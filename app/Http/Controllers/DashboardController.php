<?php

namespace App\Http\Controllers;

use App\Models\facility;
use App\Models\roomtype;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view('userdash');
        }elseif(Auth::user()->hasRole('receptionist')){
            return view('receptionistdash');
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard');
        }
    }

    public function myprofile()
    {
        $bookings = booking::where('bookername', 'Fiony')->latest()->paginate(5);
        return view('myprofile', compact('bookings'));
    }
    public function room()
    {
        return view('room');
    }
    public function roomview()
    {
        $data = roomtype::all();
        return view('roomview', compact('data'));
    }
    public function facility()
    {
        return view('facility');
    }
    public function facilityview()
    {
        $data = facility::all();
        return view('facilityview', compact('data'));
    }
    public function reservation()
    {
        $booking = booking::all();
        return view('reservation', compact('booking'));
    }

    // public function myprofileDetail(booking $booking)
    // {
    //     $booking = booking::where('id', auth()->user()->id);
    // }
    
}
