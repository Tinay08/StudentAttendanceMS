@extends('layouts.app')

@section('content')
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div class="mt-5">
                <h5 class="text-gray-600 uppercase font-bold">Add Course</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('subject.index') }}" class="text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>
        
        <div class="container mt-8">
            <form action="{{ route('subject.store') }}" method="POST" class="w-100 max-w-xl px-3 py-4">
                @csrf
                <div class="mb-3 row">
                    <label class="col-md-3 col-form-label text-md-end text-gray-600">
                        Course Name
                    </label>
                    <div class="col-md-9">
                        <input name="name" class="form-control" type="text" value="{{ old('name') }}">
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
                        <input name="subject_code" class="form-control" type="text" value="{{ old('subject_code') }}">
                        @error('subject_code')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-md-3 col-form-label text-md-end text-gray-600">
                        Course Description
                    </label>
                    <div class="col-md-9">
                        <input name="description" class="form-control" type="text" value="{{ old('description') }}">
                        @error('description')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label class="col-md-3 col-form-label text-md-end text-gray-600">
                        Assign Faculty
                    </label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="teacher_id" class="form-select" id="grid-state">
                                <option value="">Select Faculty</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('teacher_id')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <button class="btn btn-primary" type="submit" style="margin-left: 80%">
                            Submit
                        </button>
                    </div>
                </div>
            </form>        
        </div>

    </div>
@endsection