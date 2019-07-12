<?php

namespace App\Http\Controllers\admin;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
  public function index(){
    $reservations = Reservation::all();
    // print_r($reservations);
    return view('admin.reservation.index',compact('reservations'));
  }

}
