<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Worker;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    // Display a listing of the positions
    public function index()
    {
        $workers = Worker::all();
        $teachers = Teacher::all();
        $positions = Position::all();
        return view('position.index', compact('positions','teachers','workers'));
    }

    // Show the form for creating a new position
    public function create()
    {
        $users = User::all(); // Retrieve all users from the database
        return view('position.create', compact('users')); // Pass users to the view
    }

    // Store a newly created position in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Changed 'name' to 'user_id'
            'position' => 'required|string|max:255'
        ]);

        Position::create([
            'name' => $request->name,
            'position' => $request->position
        ]);

        return redirect()->route('position.index')->with('success', 'Position added successfully');
    }

    // Display the specified position
    public function show(Position $position)
    {
        return view('position.show', compact('position'));
    }

    // Show the form for editing the specified position
    public function edit(Position $position)
    {
        return view('position.edit', compact('position'));
    }

    // Update the specified position in storage
    public function update(Request $request, Position $position)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255'
        ]);

        $position->update($request->all());

        return redirect()->route('position.index')->with('success', 'Position updated successfully');
    }

    // Remove the specified position from storage
    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('position.index')->with('success', 'Position deleted successfully');
    }
}
