<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::get();
        return view('category.index',compact('teachers'));
    }

    public function create()
    {
        return view('category.create');
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

    public function edit (int $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('category.edit', compact('teacher'));
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

    public function destroy(int $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->back()->with('status','Teacher Deleted.');
    }
}
