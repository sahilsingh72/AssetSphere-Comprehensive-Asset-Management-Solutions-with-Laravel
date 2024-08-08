<?php
namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Task;
use App\Models\Todolist;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        // Fetch all tasks
        // $tasks = Todolist::all();
        
        // Paginate assets, showing 10 per page
        $assets = Asset::paginate(10);
        
        // Return the view with both assets and tasks
        return view('admin.asset.index', compact('assets'));
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

        return redirect()->route('okcl.asset.index')->with('success', 'Asset added successfully.');
    }
}
