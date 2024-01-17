<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        // dd($students);
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        // dd($request->all()); //for testing if the data has been stored or not
        Student::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,

        ]);

        return redirect()->route("index");
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');
        $student->save();
        return redirect('/')->with('success', 'Item updated successfully');
    }

    public function destroyUser($id)
    {
        $user = Student::where("id", $id)->first();
        $user->delete();

        return redirect('/')->with('success', 'Item deleted successfully');
    }
}
