@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h5 class="text-gray-600 uppercase font-bold">Classes</h5>
            </div>
            <div class="flex items-center">
                <a href="{{ route('classes.create') }}" class="text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Add Class</span>
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
        <div class="mt-8 bg-white rounded border-gray-300 shadow-md">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold text-white rounded-tl rounded-tr" style="background-color:#4169E1">
                <div class="w-1/12 px-4 py-3">No.#</div>
                <div class="w-2/12 px-4 py-3">Class Name</div>
                <div class="w-1/12 px-4 py-3" style="margin-left: 5%">Students</div>
                <div class="w-2/12 px-4 py-3" style="margin-left: 15%">Faculty</div>
                <div class="w-2/12 px-4 py-3 text-right" style="margin-left: 10%">Actions</div>
            </div>
            @foreach ($classes as $class)
                <div class="flex flex-wrap items-center text-gray-700 border-t border-l border-r border-gray-300">
                    <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $class->class_numeric }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $class->class_name }}</div>
                    <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left: 5%">
                        <span class="text-sm mr-1 mb-1 px-2 font-semibold">
                            {{ $class->students_count }}
                        </span>
                    </div>
                    <div class="ml-5 w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left: 15%">{{ $class->teacher->user->name ?? '' }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3" style="margin-left: 10%">
                        <a href="{{ route('classes.edit',$class->id) }}" title="Edit" class="text-green-600">
                            <i class="fas fa-solid fa-pen"></i>
                        </a>
                        <form action="{{ route('classes.destroy',$class->id) }}" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-3 deletebtn ml-1 rounded-sm text-red-600" title="Delete">
                                <i class="fas fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $classes->links() }}
        </div>
    </div>
@endsection
