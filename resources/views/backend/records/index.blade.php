@extends('layouts.app')

@section('content')
<div class="mt-5">
        <div class="flex items-center justify-between mb-6">
            <div class="mt-5">
            <h4 class="text-gray-600 uppercase font-bold">Class: BSIT-IV</h4>
            <h6 class="text-gray-600 uppercase "> Date: {{ date('Y-m-d') }}</h6>
        </div>
           
        </div>
        <div class="mt-8 bg-white rounded border-gray-300 shadow-md">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold text-white rounded-tl rounded-tr" style="background-color:#4169E1">
                <div class="w-1/12 px-4 py-3">No.#</div>
                <div class="w-2/12 px-4 py-3" style="margin-left: 15%">Student Name</div>
                <div class="w-1/12 px-4 py-3" style="margin-left: 5%">Status</div>
                <div class="w-2/12 px-4 py-3 text-right" style="margin-left: 28%">Actions</div>
            </div>
           
                <div class="flex flex-wrap items-center text-gray-700 border-t border-l border-r border-gray-300">
                    <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">1</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left: 15%">Tinay</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-green-500 tracking-tight" style="margin-left: 5%">Present</div>
                    
                    <div class="ml-5 w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $class->teacher->user->name ?? '' }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3" >
                        <a href="#" title="Edit" class="text-green-600" >
                            <i class="fas fa-solid fa-pen"></i>
                        </a>
                        <form action="#" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-3 deletebtn ml-1 rounded-sm text-red-600" title="Delete">
                                <i class="fas fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap items-center text-gray-700 border-t border-l border-r border-gray-300">
                    <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">1</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left: 15%">Tinay</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-green-500 tracking-tight" style="margin-left: 5%">Present</div>
                    
                    <div class="ml-5 w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $class->teacher->user->name ?? '' }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3" >
                        <a href="#" title="Edit" class="text-green-600" >
                            <i class="fas fa-solid fa-pen"></i>
                        </a>
                        <form action="#" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-3 deletebtn ml-1 rounded-sm text-red-600" title="Delete">
                                <i class="fas fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap items-center text-gray-700 border-t border-l border-r border-gray-300">
                    <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">1</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left: 15%">Tinay</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-green-500 tracking-tight" style="margin-left: 5%">Present</div>
                    
                    <div class="ml-5 w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $class->teacher->user->name ?? '' }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3" >
                        <a href="#" title="Edit" class="text-green-600" >
                            <i class="fas fa-solid fa-pen"></i>
                        </a>
                        <form action="#" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-3 deletebtn ml-1 rounded-sm text-red-600" title="Delete">
                                <i class="fas fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap items-center text-gray-700 border-t border-l border-r border-gray-300">
                    <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">1</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left: 15%">Tinay</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-green-500 tracking-tight" style="margin-left: 5%">Present</div>
                    
                    <div class="ml-5 w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $class->teacher->user->name ?? '' }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3" >
                        <a href="#" title="Edit" class="text-green-600" >
                            <i class="fas fa-solid fa-pen"></i>
                        </a>
                        <form action="#" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-3 deletebtn ml-1 rounded-sm text-red-600" title="Delete">
                                <i class="fas fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap items-center text-gray-700 border-t border-l border-r border-gray-300">
                    <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">1</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left: 15%">Tinay</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-green-500 tracking-tight" style="margin-left: 5%">Present</div>
                    
                    <div class="ml-5 w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $class->teacher->user->name ?? '' }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3" >
                        <a href="#" title="Edit" class="text-green-600" >
                            <i class="fas fa-solid fa-pen"></i>
                        </a>
                        <form action="#" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-3 deletebtn ml-1 rounded-sm text-red-600" title="Delete">
                                <i class="fas fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            
        </div>
@endsection