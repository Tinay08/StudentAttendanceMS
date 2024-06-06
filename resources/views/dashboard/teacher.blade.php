<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full sm:w-1/2 mr-2 mb-6">
            <h5 class="text-gray-600 uppercase font-bold mb-2">Attendance</h>
            <div class="flex flex-wrap items-center mt-5">
                @foreach ($teacher->classes as $class)
                    <div class="w-full sm:w-1/2 text-center border border-gray-400 rounded">
                         <div style="mt-3 text-align: center; margin-bottom: 2rem;">
                            <img src="{{ asset('images/attendance.png') }}" class="mt-3" alt="Icon" style="width: 100px; height: 100px; margin: 0 auto;">
                        </div>
                        <div class="text-gray-800 uppercase font-semibold px-4 py-4 mb-2">{{ $class->class_name }}</div>
                        <a href="{{ route('teacher.attendance.create',$class->id) }}" class="inline-block mb-4 text-xs text-white uppercase font-semibold px-4 py-2 border border-gray-200 rounded" 
                        style="background-color:#DAA520;text-decoration: none;">Check Attendence</a>
                    </div>
                @endforeach
            </div>
        </div> 

        <div class="w-full sm:w-1/2 ml-2 mb-6 mt-5" >
                <h5 class="text-gray-600 uppercase font-bold mb-2">Course List</h5>
                <div class="flex items-center rounded-tl rounded-tr mt-5" style="background-color:#4169E1;">
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">Course Code</div>
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">Course</div>
                    <div class="w-1/3 text-right text-white py-2 px-4 font-semibold">Faculty</div>
                </div>
                @foreach ($teacher->subjects as $subject)
                    <div class="flex items-center justify-between border border-gray-200">
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->subject_code }}</div>
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->name }}</div>
                        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{ $subject->teacher->user->name }}</div>
                    </div>
                @endforeach
            </div>
    </div>
</div>

