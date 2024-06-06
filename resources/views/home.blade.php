@extends('layouts.app')

@section('content')

<div class="home mt-5">
    <div class="flex items-center justify-between mb-6">
        

   
    </div>

    @role('Admin')
        @include('dashboard.admin')
    @endrole

    @role('Teacher')
        @include('dashboard.teacher')
    @endrole

    @role('Student')
        @include('dashboard.student')
    @endrole

</div>

@endsection
