<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
   public function create()

   {
      return view('customer.new_customer');
   }
   public function store(Request $request)
   {
      $request->validate([
         'name' => 'required',
         'dia_no' => 'required',
         'mat' => 'required',
         'contact' => 'required|digits:10',
         'g_date' => 'required|date',
         'company' => 'required',

      ]);
      DB::table('main_tab')->insert([
         'u_name' => $request->name,
         'dia_no' => $request->dia_no,
         'material' => $request->mat,
         'contact' => $request->contact,
         'given' => $request->g_date,
         'company' => $request->company,
      ]);
      return redirect('/new_customer')->with('success', 'Customer Added successfully.');
   }
}
