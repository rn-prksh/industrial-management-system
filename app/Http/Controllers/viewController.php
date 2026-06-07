<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MainTab;

class ViewController extends Controller
{
    public function create()

    {
        return view('customer.view');
    }
    public function store(Request $request)
    {
        if ($request->has('viewall')) {
            $records = DB::table('main_tab')->get();
            return view('customer.view', [
                'records' => $records,
                'company' => 'All Companies'
            ]);
        }

        $request->validate([
            'company' => 'required'
        ]);

        $records = DB::table('main_tab')
            ->where('company', $request->company)
            ->get();

        return view('customer.view', [
            'records' => $records,
            'company' => $request->company
        ]);
    }

    public function dcreate()
    {
        return view('customer.d_view');
    }
    public function dstore(Request $request)
    {
        if ($request->has('viewall')) {
            $records = DB::table('deli_tab')->get();
            return view('customer.d_view', [
                'records' => $records,
                'company' => 'All Companies'
            ]);
        }

        $request->validate([
            'company' => 'required'
        ]);

        $records = DB::table('deli_tab')
            ->where('company', $request->company)
            ->get();

        return view('customer.d_view', [
            'records' => $records,
            'company' => $request->company
        ]);
    }
}
