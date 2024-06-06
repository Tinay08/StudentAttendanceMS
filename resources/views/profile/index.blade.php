@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div class="mt-5">
                <h5 class="text-gray-600 uppercase font-bold">Profile</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('profile.edit') }}" class="bg-blue-600 text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="text-decoration: none;">
                    <span class="ml-2 text-xs font-semibold">Edit Profile</span>
                </a>
            </div>
        </div>
        <div style="display: grid; place-items: center;">
            <div>
                <img class="w-32 h-32 sm:w-48 sm:h-48 rounded-full" src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}" alt="profile" >    
            </div>        
        </div>
        <div class="container mt-5">
            <div class="w-full col-sm-auto order-last order-sm-first">
                <div>
                    <div class="form-group row">
                        <label for="name" class="col-form-label col-md-3 text-md-right text-gray-600">Full Name:</label>
                        <div class="col-md-9">
                            <span class="form-control-plaintext">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-form-label col-md-3 text-md-right  text-gray-600">Email Address:</label>
                        <div class="col-md-9">
                            <span class="form-control-plaintext">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-form-label col-md-3 text-md-right  text-gray-600">Role:</label>
                        <div class="col-md-9">
                            <span class="form-control-plaintext">{{ auth()->user()->roles[0]->name ?? '' }}</span>
                        </div>
                    </div>
                </div>        
            </div>        
        </div>
    </div>
@endsection