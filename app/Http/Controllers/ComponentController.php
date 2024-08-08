<?php
namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    // Display the component list
    public function index()
    {
        // Fetch all components from the database
        $components = Component::all();
        
        // Return the view with the components data
        return view('admin.component', compact('components'));
    }

    // Store a new component
    public function store(Request $request)
    {
        // Validate and store the component data
        $request->validate([
            'name' => 'required|string|max:255',
            'purchase_date' => 'required|date',
            'status' => 'required|string|max:255',
            'warranty_date' => 'required|date',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $component = new Component();
        $component->name = $request->name;
        $component->purchase_date = $request->purchase_date;
        $component->status = $request->status;
        $component->warranty_date = $request->warranty_date;

        if ($request->hasFile('picture')) {
            $imageName = time().'.'.$request->picture->extension();
            $request->picture->storeAs('public', $imageName);
            $component->picture = $imageName;
        }

        $component->save();

        return redirect()->route('components.index')->with('success', 'Component added successfully.');
    }

    // Other methods like show, edit, update, destroy
}
