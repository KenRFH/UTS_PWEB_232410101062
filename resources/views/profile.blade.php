@extends('app')
@section('title', 'Profil')
@section('content')
<div class="w-full text-center mt-10 mb-8">
    <h1 class="text-3xl font-bold text-gray-800 font-poppins">
        Profil Pengguna
    </h1>
</div>

<div class="w-full max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
        <div class="md:shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-48"
                src="{{ asset('/build/assets/default-profile.png') }}" alt="Foto Profil">
           
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Informasi Pengguna</div>
            <div class="mt-4">

                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2"> Username: {{ $username }}</label>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Divisi: Manager</label>
                    </p>
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('logout') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
