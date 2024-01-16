<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::get();
        $students = Students::get();
        return view('category.index',compact(['teachers','students']));
    }

    public function create()
    {
        return view('category.create');
    }

    public function create2()
    {
        return view('category.create2');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|max:255|string',
            'age' =>'required|max:255|int',
            'address' =>'required|max:255|string',
            'department' =>'required|max:255|string'
        ]);

        Teacher::create([
            'name'=> $request->name,
            'age'=> $request->age,
            'address'=> $request->address,
            'department'=> $request->department,
        ]);

        return redirect('teachers/create')->with('status','Teacher Added.');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'name' =>'required|max:255|string',
            'age' =>'required|max:255|int',
            'address' =>'required|max:255|string',
            'course' =>'required|max:255|string',
            'subject' =>'required|max:255|string'
        ]);

        Students::create([
            'name'=> $request->name,
            'age'=> $request->age,
            'address'=> $request->address,
            'course'=> $request->course,
            'subject'=> $request->subject
        ]);

        return redirect('students/create2')->with('status','Student Added.');
    }

    public function edit (int $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('category.edit', compact('teacher'));
    }

    public function edit2 (int $id)
    {
        $student = Students::findOrFail($id);
        return view('category.edit2', compact('student'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' =>'required|max:255|string',
            'age' =>'required|max:255|int',
            'address' =>'required|max:255|string',
            'department' =>'required|max:255|string'
        ]);

        Teacher::findOrFail($id)->update([
            'name'=> $request->name,
            'age'=> $request->age,
            'address'=> $request->address,
            'department'=> $request->department,
        ]);

        return redirect()->back()->with('status','Teacher Updated.');
    }

    public function update2(Request $request, int $id)
    {
        $request->validate([
            'name' =>'required|max:255|string',
            'age' =>'required|max:255|int',
            'address' =>'required|max:255|string',
            'course' =>'required|max:255|string',
            'subject' =>'required|max:255|string'
        ]);

        Students::findOrFail($id)->update([
            'name'=> $request->name,
            'age'=> $request->age,
            'address'=> $request->address,
            'course'=> $request->course,
            'subject'=> $request->subject
        ]);

        return redirect()->back()->with('status','Student Updated.');
    }

    public function destroy(int $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->back()->with('status','Teacher Deleted.');
    }

    public function destroy2(int $id)
    {
        $student = Students::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('status','Student Deleted.');
    }
}
