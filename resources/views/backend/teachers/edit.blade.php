@extends('layouts.app')

@section('content')
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div class= mt-5>
                <h5 class="text-gray-600 uppercase font-bold">Edit Teacher</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('teacher.index') }}" class="bg-gray-700 text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>
   
        <div class="container mt-8">
            <form action="{{ route('teacher.update',$teacher->id) }}" method="POST" class="w-full max-w-xl px-6 py-12" enctype="multipart/form-data">
                @csrf
                @method('PUT')

               <div class="form-group row mb-6">
                    <div class="col-md-3"></div>
                    <div class="col-md-9 flex justify-center">
                        <img class="w-20 h-20 sm:w-32 sm:h-32 rounded-full" src="{{ asset('images/profile/' .$teacher->user->profile_picture) }}" alt="avatar">
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="name" class="text-gray-600">Fullame</label>
                    </div>
                    <div class="col-md-9">
                        <input id="name" name="name" class="form-control" type="text" value="{{ $teacher->user->name }}">
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="email" class="text-gray-600 ">Email Address</label>
                    </div>
                    <div class="col-md-9">
                        <input id="email" name="email" class="form-control" type="email" value="{{ $teacher->user->email }}">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="permanent_address" class="text-gray-600">Address</label>
                    </div>
                    <div class="col-md-9">
                        <input id="permanent_address" name="permanent_address" class="form-control" type="text" value="{{ $teacher->permanent_address }}">
                        @error('permanent_address')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="phone" class="text-gray-600">Phone Number</label>
                    </div>
                    <div class="col-md-9">
                        <input id="phone" name="phone" class="form-control" type="text" value="{{ $teacher->phone }}">
                        @error('phone')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label class="text-gray-600 ">Gender</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input name="gender" class="form-check-input" type="radio" id="genderMale" value="male" {{ ($teacher->gender == 'male') ? 'checked' : '' }}>
                            <label class="form-check-label" for="genderMale">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="gender" class="form-check-input" type="radio" id="genderFemale" value="female" {{ ($teacher->gender == 'female') ? 'checked' : '' }}>
                            <label class="form-check-label" for="genderFemale">Female</label>
                        </div>
                        @error('gender')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="dateofbirth" class="text-gray-600">Date of Birth</label>
                    </div>
                    <div class="col-md-9">
                        <input id="datepicker-te" name="dateofbirth" autocomplete="off" class="form-control" type="text" value="{{ $teacher->dateofbirth }}">
                        @error('dateofbirth')
                            <p class="text-danger text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <div class="col-md-3">
                        <label for="profile_picture" class="text-gray-600">Image :</label>
                    </div>
                    <div class="col-md-9">
                        <input id="profile_picture" name="profile_picture" class="form-control-file" type="file">
                    </div>
                </div>


                <div class="form-group row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <button class="btn btn-primary py-2 px-4 rounded" type="submit" style="margin-left: 50%">
                            Update Faculty
                        </button>
                    </div>
                </div>
            </form>        
        </div>

    </div>
@endsection

@push('scripts')
<script>
    $(function() {       
        $( "#datepicker-te" ).datepicker({ dateFormat: 'yy-mm-dd' });
    })
</script>
@endpush