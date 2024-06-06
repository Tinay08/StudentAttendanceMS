@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div class="mt-5">
                <h5 class="text-gray-600 uppercase font-bold">Profile</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('profile') }}" class="bg-orange-500 text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="text-decoration: none;">
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
        
            </div>
        </div> 
     
        <div class="container mt-8">
            <form action="{{ route('profile.update') }}" method="POST" class="w-full max-w-2xl mx-auto px-6 py-12 flex flex-wrap justify-between" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-full col-sm-auto order-last order-sm-first">
                    <div class="form-group row ">
                        <label for="name" class="col-form-label col-md-3 text-md-right text-gray-600">Name:</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" class="form-control" value="{{ auth()->user()->name }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="email" class="col-form-label col-md-3 text-md-right text-gray-600">Email:</label>
                        <div class="col-md-9">
                            <input id="email" name="email" type="email" class="form-control" value="{{ auth()->user()->email }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="profile_picture" class="col-form-label col-md-3 text-md-right text-gray-600">Image:</label>
                        <div class="col-md-9">
                            <input id="profile_picture" name="profile_picture" type="file" class="form-control-file">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="offset-md-3 col-md-9">
                            <button class="btn btn-primary btn-block" type="submit">Submit Changes</button>
                        </div>
                    </div>
                </div>
       
                <div class="order-first sm:order-last mb-4">
                    <div>
                        <img class="w-32 h-32 rounded-full" src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}" alt="profile">    
                    </div>        
                </div>
            </form>        
        </div>
    </div>
@endsection