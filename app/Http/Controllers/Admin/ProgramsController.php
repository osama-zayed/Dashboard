<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Models\Program; 
use Illuminate\Http\Request;

class ProgramsController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $programs = Program::all(); 
        return view('page.programs.index', [
            'programs' => $programs 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.programs.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramRequest $request)
    {
        Program::create([ 
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('programs.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $program = Program::findOrFail($id); 
        return view('page.programs.show', compact('program')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('page.programs.edit', [
            'program' => $program 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramRequest $request, string $id)
    {
        $program = Program::findOrFail($id); 
        $program->update($request->only('name', 'description')); 

        return redirect()->route('programs.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('programs.index');
    }
}
