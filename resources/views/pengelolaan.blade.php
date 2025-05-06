@extends('app')
@section('title', 'Dashboard')
@section('content')
<div class="w-full text-center mt-10 mb-8 px-10">
    <h1 class="text-3xl font-bold text-gray-800 font-poppins">
        Selamat Datang, {{ $username }} 👋
    </h1>
    <p class="text-gray-600 mt-2">Waktunya mengelola karyawan xixixi</p>
</div>

<div class="w-full bg-blue-100 py-20 px-10 rounded-[40px]">
    <div class="flex justify-center items-center mb-8">
        <div class="flex items-center">
            <input type="text" class="rounded-md py-2 px-4 border border-white " placeholder="Cari karyawan...">
            <button class="bg-blue-700 text-white hover:bg-white hover:text-blue-700 duration-500 font-bold py-2 px-4 rounded ml-2 focus:outline-none focus:shadow-outline" type="submit">
                Search
            </button>
        </div>
    </div>
   <div>

    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-800">Daftar Karyawan</h1>
            <p class="text-gray-500 mt-2">Informasi singkat tentang karyawan dan divisi</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($karyawan as $item)
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-blue-100 text-blue-600 w-16 h-16 flex items-center justify-center rounded-full text-xl font-bold mb-4">
                            {{ strtoupper(substr($item['nama'], 0, 2)) }}
                        </div>
                        <h2 class="text-lg font-semibold text-gray-800">{{ $item['nama'] }}</h2>
                        <p class="text-sm text-gray-500 mt-1">{{ $item['divisi'] }}</p>
                        <span class="text-sm mt-2 text-gray-700">Umur: <strong>{{ $item['umur'] }}</strong></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

   </div>
</div>
@endsection
