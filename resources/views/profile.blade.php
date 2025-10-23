@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4 text-white text-center">Profile</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
    <div class="bg-neutral-900 p-6 rounded-xl shadow-md justify-center items-center flex flex-col">
        <h1 class="text-3xl font-bold mb-8 text-center text-white">{{ session('username') }}</h1>
        <img src="{{ asset($profile['image']) }}" alt="profile" class="w-auto h-72 cursor-pointer mr-0.5 rounded-full border-4 border-neutral-700"/>
    </div>
    <div class="bg-neutral-900 p-6 rounded-xl shadow-md flex gap-16">
        <div>
            <p>Nama Lengkap</p>
            <p class="text-xl py-1 mb-6"><b>{{ $profile['nama'] }}</b></p>
            <p>NIM</p>
            <p class="text-xl py-1"><b>{{ $profile['nim'] }}</b></p>
        </div>
        <div>
            <p>Program Studi</p>
            <p class="text-xl py-1 mb-6"><b>{{ $profile['prodi'] }}</b></p>
            <p>Fakultas</p>
            <p class="text-xl py-1"><b>{{ $profile['fakultas'] }}</b></p>
        </div>
    </div>
</div>
@endsection
