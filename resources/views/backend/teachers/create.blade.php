@extends('layouts.app')

@section('content')

    <div class="roles">
        <div class="flex items-center justify-between mb-6">
            <div class="mt-5">
                <h5 class="text-gray-600 uppercase font-bold">Add Faculty</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('teacher.index') }}" class="bg-orange-500 text-white text-sm uppercase py-2 px-4 flex items-center rounded"  style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>

        <div class="container mt-8">
            <form action="{{ route('teacher.store') }}" method="POST" class="w-full max-w-xl px-6 py-12" enctype="multipart/form-data"  style="text-decoration: none;">
                @csrf
               <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-right" style="color: gray;">Fullame</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="email" class="col-md-3 col-form-label text-md-right" style="color: gray;">Email Address</label>
                    <div class="col-md-9">
                        <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="permanent_address" class="col-md-3 col-form-label text-md-right" style="color: gray;">Address</label>
                    <div class="col-md-9">
                        <input id="permanent_address" name="permanent_address" type="text" class="form-control" value="{{ old('permanent_address') }}">
                        @error('permanent_address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="password" class="col-md-3 col-form-label text-md-right" style="color: gray;">Password</label>
                    <div class="col-md-9">
                        <input id="password" name="password" type="password" class="form-control">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="phone" class="col-md-3 col-form-label text-md-right" style="color: gray;">Contact Number</label>
                    <div class="col-md-9">
                        <input id="phone" name="phone" type="text" class="form-control" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

           
                <div class="form-group row mt-3">
                    <label for="gender" class="col-md-3 col-form-label text-md-right" style="color: gray;">Gender</label>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male" style="color: gray;">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female" style="color: gray;">Female</label>
                        </div>
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

               <div class="form-group row mt-3">
                    <label for="dateofbirth" class="col-md-3 col-form-label text-md-right" style="color: gray;">Date of Birth</label>
                    <div class="col-md-9">
                        <input id="datepicker-tc" name="dateofbirth" autocomplete="off" class="form-control" type="text" value="{{ old('dateofbirth') }}">
                        @error('dateofbirth')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="profile_picture" class="col-md-3 col-form-label text-md-right" style="color: gray;">Image :</label>
                    <div class="col-md-9">
                        <input id="profile_picture" name="profile_picture" class="form-control-file" type="file">
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary" type="submit" style="margin-left: 80%">Submit</button>
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