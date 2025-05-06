@extends('app')
@section('title', 'Dashboard')
@section('content')

<div class="w-full text-center mt-10 mb-8">
    <h1 class="text-3xl font-bold text-gray-800 font-poppins">
        Selamat Datang, {{ $username }} 👋
    </h1>
    <p class="text-gray-600 mt-2">Waktunya mengelola karyawan xixixi</p>
</div>
<div class="w-full bg-blue-100 py-20 px-4 rounded-[40px]">
    <div class="flex items-center gap-5">
        @foreach ($jumlah as $item)
            <div class="bg-white shadow-lg rounded-xl p-6 text-center hover:bg-blue-400 transition-transform transform hover:scale-105">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">{{ $item['nama'] }}</h2>
                <div class="text-4xl">{{ $item['icon'] }} <span class="font-bold text-black">{{ $item['value'] }}</span></div>
            </div>
        @endforeach
    </div>
    <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Divisi</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($divisi as $item)
            <div class="bg-white shadow-lg rounded-xl p-6 text-center transition-transform transform hover:scale-105">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">{{ $item['title'] }}</h2>
                <div class="text-4xl">{{ $item['icon'] }} <span class="font-light text-black">{{ $item['value'] }}</span></div>
            </div>
        @endforeach
    </div>

</div>
@endsection
