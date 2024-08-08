<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.ticket.index', compact('tickets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'asset_id' => 'required|exists:assets,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|string',
            'description' => 'required|string',
            'response' => 'nullable|string',
            'resolved_date' => 'nullable|date',
        ]);

        Ticket::create($request->all());

        return redirect()->route('admin.ticket.index')
            ->with('success', 'Ticket created successfully.');
    }
}
