@extends('layouts.app')

@section('content')
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div class = mt-5>
                <h5 class="text-gray-600 uppercase font-bold">Student Information</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('student.index') }}" class="bg-gray-700 text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>
      


        <div class="container mt-8">
          <div class="row">
            <div class="col-12 col-sm-6 mb-2">
                <div class="form-group row mb-6 mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-9 flex justify-center">
                        <img class="w-20 h-20 sm:w-32 sm:h-32 rounded-full" src="{{ asset('images/profile/' .$student->user->profile_picture) }}" alt="avatar">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="roll_number" class="col-md-3 col-form-label text-md-right text-gray-600">No.# :</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->roll_number }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-right text-gray-600">Fullname :</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->user->name }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="permanent_address" class="col-md-3 col-form-label text-md-right text-gray-600">Address :</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->permanent_address }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label text-md-right text-gray-600">Email Address:</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->user->email }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label text-md-right text-gray-600">Phone Number:</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->phone }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-md-3 col-form-label text-md-right text-gray-600">Gender :</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->gender }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dateofbirth" class="col-md-3 col-form-label text-md-right text-gray-600">Date of Birth :</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->dateofbirth }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="class_id" class="col-md-3 col-form-label text-md-right text-gray-600">Class :</label>
                    <div class="col-md-6">
                        <span class="form-control-plaintext">{{ $student->class->class_name }}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection