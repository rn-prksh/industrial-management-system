<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class DeliveryController extends Controller
{
    public function create()
    {
        return view('customer.delivery');
    }
    public function store(Request $request)
    {
        $request->validate([
            'dia_no' => 'required',
            'r_name' => 'required',
            'r_contact' => 'required|digits:10',
            'company' => 'required',
            'r_date' => 'required|date',
            'time_r' => 'required',
        ]);
        DB::table('deli_tab')->insert([
            'diagram' => $request->dia_no,
            'r_name' => $request->r_name,
            'r_contact' => $request->r_contact,
            'company' => $request->company,
            'deli_date' => $request->r_date,
            'deli_time' => $request->time_r,
        ]);
        DB::table('main_tab')->where('dia_no', $request->dia_no)->delete();
        return redirect('/delivery')->with('success', 'Delivered successfully!');
    }
}
