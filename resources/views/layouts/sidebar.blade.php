<div class="sidebar mt-5 hidden sm:block w-56 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0 z-40 overflow-y-auto" style="background-image: linear-gradient(180deg,#00008B,#6495ED);">
    <div class="mb-6 mt-20 px-6">
        <a href="{{ route('home') }}" class="flex items-center text-gray-200 py-2 hover:text-blue-700" style="text-decoration: none;">
            <i class="fas fa-home mr-2"></i> 
            <span class="text-sm font-semibold">Dashboard</span>
        </a>
        <hr class="sidebar-divider d-none d-md-block" style="color:white">
        @role('Admin')
        <a href="{{ route('teacher.index') }}" class="flex items-center text-gray-200 py-2 hover:text-blue-700" style="text-decoration: none;">
            <i class="fas fa-chalkboard-teacher mr-2"></i> 
            <span class="text-sm font-semibold">Faculty</span>
        </a>
        <hr class="sidebar-divider d-none d-md-block" style="color:white">
        <a href="{{ route('subject.index') }}" class="flex items-center text-gray-200 py-2 hover:text-blue-700" style="text-decoration: none;">
            <i class="fas fa-book mr-2"></i>
            <span class="text-sm font-semibold">Course</span>
        </a>
        <hr class="sidebar-divider d-none d-md-block" style="color:white">
        <a href="{{ route('classes.index') }}" class="flex items-center text-gray-200 py-2 hover:text-blue-700" style="text-decoration: none;">
            <i class="fas fa-school mr-2"></i>
            <span class="text-sm font-semibold">Class</span>
        </a>
        <hr class="sidebar-divider d-none d-md-block" style="color:white">
        <a href="{{ route('student.index') }}" class="flex items-center text-gray-200 py-2 hover:text-blue-700" style="text-decoration: none;">
            <i class="fas fa-user-graduate mr-2"></i>
            <span class="text-sm font-semibold">Students</span>
        </a>
        <hr class="sidebar-divider d-none d-md-block" style="color:white">
        @endrole

      
        @role('Teacher')
        <a href="{{ route('records.index') }}" class="flex items-center text-gray-200 py-2 hover:text-blue-700" style="text-decoration: none;">
            <i class="fas fa-file-alt mr-2"></i>
            <span class="text-sm font-semibold">Records</span>
        </a>
        <hr class="sidebar-divider d-none d-md-block" style="color:white">
        @endrole
    
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
