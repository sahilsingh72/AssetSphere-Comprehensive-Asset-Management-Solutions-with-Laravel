<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::paginate(10);
        // $totalAssets = Asset::count();
        return view('admin.asset', compact('assets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required|date',
            'status' => 'required',
        ]);

        Asset::create($request->all());

        return redirect()->route('okcl.asset')->with('success', 'Asset added successfully.');
    }
}
