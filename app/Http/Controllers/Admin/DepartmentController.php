<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;

class DepartmentController extends Controller
{
    use HasRoles;
    /**
     * Display a listing of the resource.
     */
    // public function __construct(){
    //     $this->middleware('role:فتح مواسسة');
    // }
    public function index()
    {
        $department = Department::all();
        return view('page.departments.index', [
            'departments' => $department
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('page.departments.create', [
            'departments' => $departments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Department $department )
    {
        $department->id = $request->input('id');
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $department->save();
        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {

        return view('page.departments.edit', [
            'departments' => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
