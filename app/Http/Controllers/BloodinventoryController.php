<?php

namespace App\Http\Controllers;

use App\Models\bloodinventory;
use Illuminate\Http\Request;

class BloodinventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Bloods = inventory::latest()->get();
        return view('inventory', compact('bloods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'blood_type' => 'required|in:A+, A-, B+, B-, O+, O-, AB+, AB-',
            'status' => 'required',
            'expiry_date' => 'required|date',
            'collection_date' => 'required|date'

            

    ]);

            bloodinventory::create($validated);

            return redirect() -> route('inventory.index') -> with('success', 'Added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(bloodinventory $bloodinventory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bloodinventory $bloodinventory)
    {
        return view('/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bloodinventory $bloodinventory)
    {
        return view ('/update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bloodinventory $bloodinventory)
    {
        $bloodinventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Successfully Deleted');
    }
}
