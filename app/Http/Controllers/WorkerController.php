<?php
namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\Position;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    // Display a listing of the workers
    public function index()
    {
        $workers = Worker::all();
        return view('workers.index', compact('workers'));
    }

    // Show the form for creating a new worker
    public function create()
    {

        $positions = Position::all(); // Retrieve all users from the database
        return view('workers.create', compact('positions')); // Pass users to the view

    }

    // Store a newly created worker in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'certificate' => 'nullable|file|mimes:pdf|max:2048'
        ]);

        // Handle file uploads
        $photo = $request->file('photo') ? time() . '_photo.' . $request->photo->extension() : null;
        $certificate = $request->file('certificate') ? time() . '_certificate.' . $request->certificate->extension() : null;

        if ($photo) {
            $request->photo->move(public_path('uploads/photos'), $photo);
        }

        if ($certificate) {
            $request->certificate->move(public_path('uploads/certificates'), $certificate);
        }

        // Create worker
        Worker::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $photo,
            'certificate' => $certificate
        ]);

        return redirect()->route('workers.index')->with('success', 'Worker added successfully');
    }

    // Display the specified worker
    public function show(Worker $worker)
    {
        return view('workers.show', compact('worker'));
    }

    // Show the form for editing the specified worker
    public function edit(Worker $worker)
    {
        return view('workers.edit', compact('worker'));
    }

    // Update the specified worker in storage
    public function update(Request $request, Worker $worker)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            'certificate' => 'nullable|file|mimes:pdf|max:2048'
        ]);

        // Handle file uploads
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($worker->photo && file_exists(public_path('uploads/photos/' . $worker->photo))) {
                unlink(public_path('uploads/photos/' . $worker->photo));
            }
            $worker->photo = time() . '_photo.' . $request->photo->extension();
            $request->photo->move(public_path('uploads/photos'), $worker->photo);
        }

        if ($request->hasFile('certificate')) {
            // Delete old certificate if exists
            if ($worker->certificate && file_exists(public_path('uploads/certificates/' . $worker->certificate))) {
                unlink(public_path('uploads/certificates/' . $worker->certificate));
            }
            $worker->certificate = time() . '_certificate.' . $request->certificate->extension();
            $request->certificate->move(public_path('uploads/certificates'), $worker->certificate);
        }

        $worker->name = $request->name;
        $worker->save();

        return redirect()->route('workers.index')->with('success', 'Worker updated successfully');
    }

    // Remove the specified worker from storage
    public function destroy(Worker $worker)
    {
        if ($worker->photo && file_exists(public_path('uploads/photos/' . $worker->photo))) {
            unlink(public_path('uploads/photos/' . $worker->photo));
        }

        if ($worker->certificate && file_exists(public_path('uploads/certificates/' . $worker->certificate))) {
            unlink(public_path('uploads/certificates/' . $worker->certificate));
        }

        $worker->delete();

        return redirect()->route('workers.index')->with('success', 'Worker deleted successfully');
    }
}
