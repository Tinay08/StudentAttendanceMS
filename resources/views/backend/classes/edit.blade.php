@extends('layouts.app')

@section('content')
    <div class="roles">
 
        <div class="flex items-center justify-between mb-6">
            <div class = mt-5>
                <h5 class="text-gray-600 uppercase font-bold">Edit Class</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('classes.index') }}" class="text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>

        <div class="container mt-8">
            <form action="{{ route('classes.update',$class->id) }}" method="POST" class="w-full max-w-xl px-6 py-12">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="class_numeric" class="col-md-3 col-form-label text-md-right text-gray-600">Class Number</label>
                    <div class="col-md-6">
                        <input id="class_numeric" name="class_numeric" type="number" class="form-control @error('class_numeric') is-invalid @enderror" value="{{ $class->class_numeric }}" required autocomplete="class_numeric" autofocus>
                        @error('class_numeric')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="class_name" class="col-md-3 col-form-label text-md-right text-gray-600">Class Name</label>
                    <div class="col-md-6">
                        <input id="class_name" name="class_name" type="text" class="form-control @error('class_name') is-invalid @enderror" value="{{ $class->class_name }}" required autocomplete="class_name" autofocus>
                        @error('class_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="teacher_id" class="col-md-3 col-form-label text-md-right text-gray-600">Assign Teacher</label>
                    <div class="col-md-6">
                        <select name="teacher_id" id="teacher_id" class="form-control @error('teacher_id') is-invalid @enderror">
                            <option value="">Select Teacher</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ ($teacher->id === $class->teacher_id) ? 'selected' : '' }}>
                                    {{ $teacher->user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('teacher_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" style="margin-left: 50%">
                            Update Class
                        </button>
                    </div>
                </div>
            </form>        
        </div>
      
    </div>
@endsection