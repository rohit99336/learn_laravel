<?php

namespace App\Http\Controllers;
date_default_timezone_set('Asia/Kolkata');

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(5 );
        return view('crud.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        //Log::info($request->all());
        //Student::create($request->all());

        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);

        // redirect()->route('student.index')->with('success','new student inserted successfully!');

        return back()->with('success','new student inserted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // Log::info($student->all());
        // dd($student);
        // $user = DB::table('students')->where($request->id)->get();
        return view('crud.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('crud.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        //
        DB::table('students')
        ->where('id', $student->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'updated_at' => Carbon::now(),
        ]);

        return back();
        //return $this->index();
        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        //dd($student);
        // return 'hello sir';
       //DB::table('students')->where('id', $student->id)->delete();
       Student::deleted($student->id);
       return back();
    }
}
