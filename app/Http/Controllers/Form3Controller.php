<?php

namespace App\Http\Controllers;

use App\Models\form3;
use Illuminate\Http\Request;

class form3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form3s = form3::paginate(10);
        return view('form3.index',[
     'form3s' => $form3s

        ]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form3.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the incoming request data
         $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'region' => 'nullable|string|max:255',
            'dioces' => 'nullable|string|max:255',
            'nation' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|max:255',
            'parname' => 'required|string|max:255',
            'parphone' => 'required|string|max:20',
            'paremail' => 'nullable|email',
            'emergencephone' => 'required|string|max:20',
            'health' => 'nullable|string',
            'disability' => 'nullable|string',
        ]);
        form3::create([
            'name' => $request['name'],
            'date' => $request['date'],
            'gender' => $request['gender'],
            'region' => $request['region'],
            'dioces' => $request['dioces'],
            'nation' => $request['nation'],
            'photo' => $request['photo'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'parname' => $request['parname'],
            'parphone' => $request['parphone'],
            'paremail' => $request['paremail'],
            'emergencephone' => $request['emergencephone'],
            'health' => $request['health'],
            'disability' => $request['disability'],
        ]);

        // Redirect or respond with success message
        return redirect('/form3')->with('status', 'Student registered successfully!');
    
        
    }

    /**
     * Display the specified resource.
     */
    public function show(form3 $form3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(form3 $form3)
    {
        return view('form3.edit',compact('form3'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, form3 $form3)
    {
          // Validate the incoming request data
          $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'region' => 'nullable|string|max:255',
            'dioces' => 'nullable|string|max:255',
            'nation' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|max:255',
            'parname' => 'required|string|max:255',
            'parphone' => 'required|string|max:20',
            'paremail' => 'nullable|email',
            'emergencephone' => 'required|string|max:20',
            'health' => 'nullable|string',
            'disability' => 'nullable|string',
        ]);
        $form3->update([
            'name' => $request['name'],
            'date' => $request['date'],
            'gender' => $request['gender'],
            'region' => $request['region'],
            'dioces' => $request['dioces'],
            'nation' => $request['nation'],
            'photo' => $request['photo'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'parname' => $request['parname'],
            'parphone' => $request['parphone'],
            'paremail' => $request['paremail'],
            'emergencephone' => $request['emergencephone'],
            'health' => $request['health'],
            'disability' => $request['disability'],
        ]);

        // Redirect or respond with success message
        return redirect('/form3')->with('status', 'Student Updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form3 $form3)
    {
        $form3->delete();
        return redirect('/form3')->with('status','Student Deleted Successfully');
    }
}
