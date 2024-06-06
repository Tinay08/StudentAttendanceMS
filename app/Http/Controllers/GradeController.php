<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;

class GradeController extends Controller
{
   
    public function index()
    {
        $classes = Grade::withCount('students')->latest()->paginate(10);

        return view('backend.classes.index', compact('classes'));
    }

    
    public function create()
    {
        $teachers = Teacher::latest()->get();
        
        return view('backend.classes.create', compact('teachers'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'class_name'        => 'required|string|max:255|unique:grades',
            'class_numeric'     => 'required|numeric',
            'teacher_id'        => 'required|numeric',
            
        ]);

        Grade::create([
            'class_name'        => $request->class_name,
            'class_numeric'     => $request->class_numeric,
            'teacher_id'        => $request->teacher_id,
            
        ]);

        return redirect()->route('classes.index');
    }

    
    public function show(Grade $grade)
    {
        //
    }

   
    public function edit($id)
    {
        $teachers = Teacher::latest()->get();
        $class = Grade::findOrFail($id);

        return view('backend.classes.edit', compact('class','teachers'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_name'        => 'required|string|max:255|unique:grades,class_name,'.$id,
            'class_numeric'     => 'required|numeric',
            'teacher_id'        => 'required|numeric',
            
        ]);

        $class = Grade::findOrFail($id);

        $class->update([
            'class_name'        => $request->class_name,
            'class_numeric'     => $request->class_numeric,
            'teacher_id'        => $request->teacher_id,
            
        ]);

        return redirect()->route('classes.index');
    }

    
    public function destroy($id)
    {
        $class = Grade::findOrFail($id);
        
        $class->subjects()->detach();
        $class->delete();

        return back();
    }

    
    public function assignSubject($classid)
    {
        $subjects   = Subject::latest()->get();
        $assigned   = Grade::with(['subjects','students'])->findOrFail($classid);

        return view('backend.classes.assign-subject', compact('classid','subjects','assigned'));
    }

    
    public function storeAssignedSubject(Request $request, $id)
    {
        $class = Grade::findOrFail($id);

        $class->subjects()->sync($request->selectedsubjects);

        return redirect()->route('classes.index');
    }
}
