<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenances = Maintenance::all();
        return view('admin.maintenance.index', compact('maintenances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'component_id' => 'required|exists:components,id',
            'details' => 'required|string',
            'maintenance_date' => 'required|date',
            'performed_by' => 'nullable|string',
        ]);

        Maintenance::create($request->all());

        return redirect()->route('admin.maintenance.index')
            ->with('success', 'Maintenance created successfully.');
    }
}
