<?php

namespace App\Http\Controllers;
use App\Models\Subject;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $subject = new Subject;
        $subject->Subject_name = $request->input('Subject_name');
        $subject->Subject_index = $request->input('Subject_index');
        $subject->Subject_odernumber = $request->input('Subject_odernumber');
        $subject->Subject_type = $request->input('Subject_type');
        $subject->created_at = now();

        $subject->save();

        return redirect('/subjects');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::find($id);
        return view('subject.show', compact('subject'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::find($id);
        return view('subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::find($id);
        $subject->Subject_name = $request->input('Subject_name');
        $subject->Subject_index = $request->input('Subject_index');
        $subject->Subject_odernumber = $request->input('Subject_odernumber');
        $subject->Subject_type = $request->input('Subject_type');
        $subject->updated_at = now();

        $subject->save();

        return redirect('/subjects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::find($id);
        $subject->delete();

        return redirect('/subjects');

    }
}
