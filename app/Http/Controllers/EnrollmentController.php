<?php

namespace App\Http\Controllers;

use App\Models\none;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guest()) { 
             
            session()->flash('alert_message', 'Log In to access Enrollment Page!');

            return redirect('/login'); 
        }

        return view('/enrollment/enrollment-form'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'course' => 'required|string|max:255',
        ]);

        // Store the enrollment data (this is just an example, you might want to save it to the database)
        $enrollment = $validated; 

        // Return a view with the enrollment data
        return view('/enrollment/enrollment-success', compact('enrollment'));
    }

    /**
     * Display the specified resource.
     */
    public function show(none $none)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(none $none)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, none $none)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(none $none)
    {
        //
    }
}
