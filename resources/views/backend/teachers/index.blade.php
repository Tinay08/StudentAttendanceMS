@extends('layouts.app')

@section('content')
    <div class="mt-5 ">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h5 class="text-gray-600 uppercase font-bold">FACULTY</h5>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('teacher.create') }}" class="text-white text-sm uppercase py-2 px-4 flex items-center rounded" style="background-color:#DAA520;text-decoration: none;">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Add Faculty</span>
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
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold text-white rounded-tl rounded-tr" style="background-color:#4169E1" >
                <div class="w-2/12 px-4 py-3">Name</div>
                <div class="w-3/12 px-4 py-3" style="margin-left:5%">Email</div>
                <div class="w-2/12 px-4 py-3" style="margin-left:15%">Phone</div>
                <div class="w-2/12 px-4 py-3 text-right">Actions</div>
            </div>
            @foreach ($teachers as $teacher)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $teacher->user->name }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left:5%">{{ $teacher->user->email }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" style="margin-left:15%">{{ $teacher->phone }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3 ">
                        <a href="{{ route('teacher.edit',$teacher->id) }}">
                            <i class="fas fa-solid fa-pen" style="color: #0b8433;"></i>
                        </a>
                        <a href="{{ route('teacher.destroy', $teacher->id) }}" data-url="{{ route('teacher.destroy', $teacher->id) }}" class="ml-3 deletebtn ml-1  rounded-sm">
                            <i class="fas fa-solid fa-trash" style="color: #c04916;"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $teachers->links() }}
        </div>

        @include('backend.modals.delete',['name' => 'teacher'])
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
        $( ".deletebtn" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
            var url = $(this).attr('data-url');
            $(".remove-record").attr("action", url);
        })        
        
        $( "#deletemodelclose" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
        })
    })
</script>
@endpush