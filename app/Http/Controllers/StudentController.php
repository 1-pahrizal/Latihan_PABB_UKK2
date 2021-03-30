<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classes;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index', [
            'students' => Student::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classes::all();
        return view('student.add', compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi pengisian field tambah data
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'class_id' => 'required',
            'nomor_Telepon' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required'         
        ]);

        Student::create($request->all());

        return redirect()->route('student.index')
            ->with('success', 'Student created successfully.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classes::all();
        $student = Student::find($id);
        return view('student.edit', compact('student', 'class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        // Validasi pengisian field tambah data
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'class_id' => 'required',
            'nomor_Telepon' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required'           
        ]);

        $student = Student::find($id);
        $student->nis = $request->nis;
        $student->nama = $request->nama;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->jenis_kelamin = $request->jenis_kelamin;
        $student->class_id = $request->class_id;
        $student->nomor_Telepon = $request->nomor_Telepon;
        $student->alamat = $request->alamat;
        $student->asal_sekolah = $request->asal_sekolah;
        $student->save();

        return redirect()->route('student.index')
            ->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index')
            ->with('success', 'Student deleted successfully');
    }
}
