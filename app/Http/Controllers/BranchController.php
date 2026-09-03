<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'manager_id' => 'required|string|exists:employees,id',
            'city' => 'required|string|max:255',
            'latitude' => 'required|numeric|between:-90,90|',
            'longitude' => 'required|numeric|between:-180,180|',
            'timing' => 'required|string|max:255',
        ]);
        DB::table('branch')->insert($validatedData);

        return redirect()->route('admin.branches.index')->with('success', 'Branch created successfully.');
    }
}
