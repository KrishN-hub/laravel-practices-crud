<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('student.index');
        $students = Student::all();
        return view('student/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student =new Student;
        $student->Admission_no = $request->input('Admission_no');
        $student->Student_name = $request->input('Student_name');
        $student->Father_name = $request->input('Father_name');
        $student->Gender= $request->input('Gender');
        $student->Telephone_number = $request->input('Telephone_number');
        $student->Nic_number = $request->input('Nic_number');
        $student->Date_of_birth = $request->input('Date_of_birth');
        $student->Address = $request->input('Address');
        $student->Joint_date = $request->input('Joint_date');
        $student->created_at = now();

        $student->save();

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('student/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view ('student/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student =Student::find($id);

        $student->Admission_no = $request->input('Admission_no');
        $student->Student_name = $request->input('Student_name');
        $student->Father_name = $request->input('Father_name');
        $student->Gender= $request->input('Gender');
        $student->Telephone_number = $request->input('Telephone_number');
        $student->Nic_number = $request->input('Nic_number');
        $student->Date_of_birth = $request->input('Date_of_birth');
        $student->Address = $request->input('Address');
        $student->Joint_date = $request->input('Joint_date');

        $student->updated_at = now();
        $student->save();

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');

    }
}
