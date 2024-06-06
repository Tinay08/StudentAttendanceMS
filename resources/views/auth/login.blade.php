@extends('layouts.frontend')

@section('content')
<style>
    body {
        background-image: url('{{ asset('images/cecbglogin2.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<div class="w-full max-w-md mx-auto" style="margin-top:10rem; max-width: 500px;">
    <form method="POST" action="{{ route('login') }}" class="bg-white shadow rounded px-10 pt-8 pb-8 mb-4" style="padding: 5rem;">
        @csrf
    
        <div style="text-align: center; margin-bottom: 2rem;">
            <img src="{{ asset('images/ceclogo.png') }}" alt="Icon" style="width: 100px; height: 100px; margin: 0 auto;">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="emailaddress">
                Email Address
            </label>
            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="emailaddress" placeholder="email address">
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="password">
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-500 font-bold">
                <input class="mr-2 leading-tight" type="checkbox" onclick="togglePassword()">
                <span class="text-sm">
                    Show Password
                </span>
            </label>
        </div>

        <div class="flex items-center justify-end">
            <button class="hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" 
             style="background-color: #4169E1">
                Log In
            </button>
        </div>
    </form>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
@endsection
