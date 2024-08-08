<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Fetch all tasks from the todolists table
        $tasks = Todolist::all();

        // Pass the tasks to the dashboard view
        return view('admin.dashboard', compact('tasks'));
    }
}
