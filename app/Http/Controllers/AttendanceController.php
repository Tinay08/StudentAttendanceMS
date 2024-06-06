<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Teacher;
use Carbon\Carbon;
use App\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $months = Attendance::select('attendence_date')
                            ->orderBy('attendence_date')
                            ->get()
                            ->groupBy(function ($val) {
                                return Carbon::parse($val->attendence_date)->format('m');
                            });

        if( request()->has(['type', 'month']) ) {
            $type = request()->input('type');
            $month = request()->input('month');

            if($type == 'class') {
                $attendances = Attendance::whereMonth('attendence_date', $month)
                                     ->select('attendence_date','student_id','attendence_status','class_id')
                                     ->orderBy('class_id','asc')
                                     ->get()
                                     ->groupBy(['class_id','attendence_date']);

                return view('backend.attendance.index', compact('attendances','months'));

            }
            
        }
        $attendances = [];
        
        return view('backend.attendance.index', compact('attendances','months'));
    }

    public function create()
    {
        
    }

    public function createByTeacher($classid)
    {
        $class = Grade::with(['students','subjects','teacher'])->findOrFail($classid);

        return view('backend.attendance.create', compact('class'));
    }


    public function store(Request $request)
    {
    }


    public function show(Attendance $attendance)
    {
       
    }

    
    public function edit(Attendance $attendance)
    {
        //
    }

   
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    public function destroy(Attendance $attendance)
    {
        //
    }
}
