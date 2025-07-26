<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $grades = Grade::all();
        return view('grade/index', compact('grades'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view ('grade/create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->Grade_name = $request->input('Grade_name');
        $grade->Grade_color = $request->input('Grade_color');
        $grade->Grade_ordernumber = $request->input('Grade_ordernumber');
        $grade->Grade_group = $request->input('Grade_group');
        $grade->created_at = now();

        $grade->save();

        return redirect('/grades');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade = Grade::find($id);
        return view('grade/show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $grade = Grade::find($id);
        return view('grade/edit', compact('grade'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grade = Grade::find($id);
        $grade->Grade_name = $request->input('Grade_name');
        $grade->Grade_color = $request->input('Grade_color');
        $grade->Grade_ordernumber = $request->input('Grade_ordernumber');
        $grade->Grade_group = $request->input('Grade_group');
        $grade->updated_at = now();

        $grade->save();

        return redirect('/grades');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $grade = Grade::find($id);
        $grade->delete();

        return redirect('/grades');



    }
}
