@extends('layouts.app')

@section('content')
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div class= mt-5>
                <h5 class="text-gray-600 uppercase font-bold">Edit Course</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('subject.index') }}" class="text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>
     
        <div class="container mt-8">
            <form action="{{ route('subject.update',$subject->id) }}" method="POST" class="w-full max-w-xl px-6 py-12">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="col-md-3 col-form-label text-md-end text-gray-600">
                        Course Name
                    </label>
                    <div class="col-md-9">
                        <input name="name" class="form-control" type="text" value="{{ $subject->name }}">
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-md-3 col-form-label text-md-end text-gray-600">
                        Course Code
                    </label>
                    <div class="col-md-9">
                        <input name="subject_code" class="form-control" type="text" value="{{ $subject->subject_code }}">
                        @error('subject_code')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="description" class="text-gray-600">Course Description</label>
                    </div>
                    <div class="col-md-9">
                        <input id="description" name="description" class="form-control" type="text" value="{{ $subject->description }}">
                        @error('description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="teacher_id" class="text-gray-600">Assign Faculty</label>
                    </div>
                    <div class="col-md-9">
                        <div class="relative">
                            <select name="teacher_id" id="teacher_id" class="form-control">
                                <option value="">Select Faculty</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ ($teacher->id === $subject->teacher_id) ? 'selected' : '' }}>
                                        {{ $teacher->user->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @error('teacher_id')
                            <p class="text-danger text-xs font-normal italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

            
                <div class="form-group row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <button class="btn btn-primary font-bold py-2 px-4 rounded" type="submit" style="margin-left: 50%">
                            Update Course
                        </button>
                    </div>
                </div>
            </form>        
        </div>
        
    </div>
@endsection