@extends('layouts.app')

@section('content')
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div class = mt-5> 
                <h5 class="text-gray-600 uppercase font-bold">Edit Student</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('student.index') }}" class="bg-gray-700 text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>

        <div class="container mt-8">
            <form action="{{ route('student.update',$student->id) }}" method="POST" class="w-full max-w-xl px-6 py-12" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row mb-6">
                    <div class="col-md-3"></div>
                    <div class="col-md-9 flex justify-center">
                        <img class="w-20 h-20 sm:w-32 sm:h-32 rounded-full" src="{{ asset('images/profile/' .$student->user->profile_picture) }}" alt="avatar">
                    </div>
                </div>

                 <div class="form-group row mt-3">
                    <label for="roll_number" class="col-md-3 col-form-label text-md-right text-gray-600">No.#</label>
                    <div class="col-md-6">
                        <input id="roll_number" name="roll_number" type="number" class="form-control @error('roll_number') is-invalid @enderror" value="{{ $student->roll_number }}">
                        @error('roll_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="name" class="col-md-3 col-form-label text-md-right text-gray-600">Fullame</label>
                    <div class="col-md-6">
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $student->user->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="permanent_address" class="col-md-3 col-form-label text-md-right text-gray-600">Address</label>
                    <div class="col-md-6">
                        <input id="permanent_address" name="permanent_address" type="text" class="form-control @error('permanent_address') is-invalid @enderror" value="{{ $student->permanent_address }}">
                        @error('permanent_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="email" class="col-md-3 col-form-label text-md-right text-gray-600">Email Address</label>
                    <div class="col-md-6">
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $student->user->email }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="phone" class="col-md-3 col-form-label text-md-right text-gray-600">Phone Number</label>
                    <div class="col-md-6">
                        <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ $student->phone }}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="gender" class="col-md-3 col-form-label text-md-right text-gray-600">Gender</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ ($student->gender == 'male') ? 'checked' : '' }}>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ ($student->gender == 'female') ? 'checked' : '' }}>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="dateofbirth" class="col-md-3 col-form-label text-md-right text-gray-600">Date of Birth</label>
                    <div class="col-md-6">
                        <input id="datepicker-tc" name="dateofbirth" type="text" class="form-control @error('dateofbirth') is-invalid @enderror" value="{{ $student->dateofbirth }}" autocomplete="off">
                        @error('dateofbirth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="class_id" class="col-md-3 col-form-label text-md-right text-gray-600">Assign Class</label>
                    <div class="col-md-6">
                        <select id="class_id" name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                            <option value="">--Select Class--</option>
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}" {{ ($class->id === $student->class_id) ? 'selected' : '' }}>
                                    {{ $class->class_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('class_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
          
                <div class="form-group row mt-3">
                    <label for="profile_picture" class="col-md-3 col-form-label text-md-right text-gray-600">Image :</label>
                    <div class="col-md-6">
                        <input id="profile_picture" name="profile_picture" type="file" class="form-control-file">
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" style="margin-left: 40%">Update Student</button>
                    </div>
                </div>
            </form>        
        </div>

    </div>
@endsection

@push('scripts')
<script>
    $(function() {       
        $( "#datepicker-tc" ).datepicker({ dateFormat: 'yy-mm-dd' });
    })
</script>
@endpush