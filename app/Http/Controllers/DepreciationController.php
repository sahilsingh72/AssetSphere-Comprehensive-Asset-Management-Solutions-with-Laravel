<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depreciation;

class DepreciationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depreciations = Depreciation::all();
        return view('admin.depreciation.index', compact('depreciations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'asset_id' => 'required|exists:assets,id',
            'value' => 'required|numeric',
            'depreciation_date' => 'required|date',
            'details' => 'nullable|string',
        ]);

        Depreciation::create($request->all());

        return redirect()->route('admin.depreciation.index')
            ->with('success', 'Depreciation created successfully.');
    }
}
