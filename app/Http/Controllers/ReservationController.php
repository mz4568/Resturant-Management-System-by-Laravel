<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Reservation;
class ReservationController extends Controller
{
    public function index(){
        $reservations=Reservation::all();
        return view('admin.reservation',compact('reservations'));
    }
    public function store(Request $request)
    {
       $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'date_and_time' => 'required'
        ]);
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date_and_time = $request->date_and_time;
        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();
        Toastr::success('Reservation request sent successfully. we will confirm to you shortly','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    
    }
    public function destroy($id)
    {
        Reservation::find($id)->delete();
        Toastr::success('Reservation successfully deleted.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function confirm($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
        Toastr::success('Reservation successfully confirmed.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
