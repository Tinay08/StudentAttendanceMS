@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h5 class="text-gray-600 uppercase font-bold">Course</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('subject.create') }}" class="text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520; text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Add Course</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append mt-2">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300"> 
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold text-white rounded-tl rounded-tr" style="background-color:#4169E1">
                <div class="w-3/12 px-4 py-3">Course Name</div>
                <div class="w-2/12 px-4 py-3">Course Code</div>
                <div class="w-2/12 px-4 py-3">Faculty</div>
                <div class="w-3/12 px-4 py-3">Description</div>
                <div class="w-2/12 px-4 py-3 text-right">Actions</div>
            </div>
            @foreach ($subjects as $subject)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $subject->name }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $subject->subject_code }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $subject->teacher->user->name }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $subject->description }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3">
                        <a href="{{ route('subject.edit',$subject->id) }}">
                             <i class="fas fa-solid fa-pen" style="color: #0b8433;"></i>
                        </a>
                        <form action="{{ route('subject.destroy',$subject->id) }}" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="ml-3 deletebtn ml-1  rounded-sm">
                                 <i class="fas fa-solid fa-trash" style="color: #c04916;"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $subjects->links() }}
        </div>
    </div>

@endsection

