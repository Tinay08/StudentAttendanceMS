@extends('layouts.app')

@section('content')
    <div class="create">

        <div class="flex items-center justify-between mb-6">
            <div class=mt-5>
                
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('home') }}" class="text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="text-decoration: none;background-color:#DAA520;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>
        <div class="mt-5">
            <h4 class="text-gray-600 uppercase font-bold">Class: {{ $class->class_name }}</h4>
            <h6 class="text-gray-600 uppercase "> Date: {{ date('Y-m-d') }}</h6>
        </div>
        <div class="w-full rounded">
            <div class="flex items-center justify-between px-6 py-6 pb-0">
                <div class="text-sm text-red-600 italic">
                    @error('attendences')
                        <span class="border-l-4 border-red-500 px-2">{{ $message }}</span>
                    @enderror
                    @if(session('status'))
                        <span class="border-l-4 border-red-500 px-2">{{ session('status') }}</span>
                    @endif
                </div>
            </div>

            <div class="w-full px-6 py-6">
                <div class="flex items-center rounded-tl rounded-tr" style="background-color:#4169E1;">
                    <div class="w-3/12 text-left text-white py-2 px-4 font-semibold">No.#</div>
                    <div class="w-4/12 text-left text-white py-2 px-4 font-semibold">Student Name</div>      
                    <div class="w-5/12 text-right text-white py-2 px-4 font-semibold">Action</div>
                </div>
                <form action="{{ route('teacher.attendance.store') }}" method="POST">
                    @foreach ($class->students as $student)
                        <div class="flex items-center justify-between border border-gray-200">
                            @csrf
                            <div class="w-3/12 text-sm text-left text-gray-600 py-2 px-4 font-semibold">{{ $student->roll_number }}</div>
                            <div class="w-4/12 text-sm text-left text-gray-600 py-2 px-4 font-semibold">{{ $student->user->name }}</div> 
                            <div class="w-5/12 text-sm text-right py-2 px-4 flex items-center justify-end">
                                <label class="block text-green-500 font-semibold sm:border-r sm:pr-4">
                                    <input name="attendences[{{ $student->id }}][]" class="leading-tight" type="checkbox" value="present">
                                    <span class="text-sm">Present</span>
                                </label>
                                <label class="ml-4 block text-red-500 font-semibold">
                                    <input name="attendences[{{ $student->id }}][]" class="leading-tight" type="checkbox" value="absent">
                                    <span class="text-sm">Absent</span>
                                </label>
                            </div>
                            <input type="hidden" name="class_id" value="{{ $student->class_id }}">
                            <input type="hidden" name="teacher_id" value="{{ $class->teacher_id }}">
                        </div>
                    @endforeach
                    <div class="mt-5" style="text-align: right;">
                        <button class="shadow hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 bg-blue-600 rounded" type="submit" style="text-decoration: none;">
                            Add to Records
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection