@extends('layouts.app')

@section('content')
<div class="text-center bg-black min-h-screen text-white">
    <h1 class="text-3xl font-bold mb-4 text-white">
        Selamat Datang di Dashboard Tugasmu, {{ session('username') }}
    </h1>

    <div class="flex justify-center mt-12">
        <div class="flex justify-center items-end space-x-10 h-70 w-80 bg-neutral-900 p-6 rounded-xl shadow-md">
            <div class="flex flex-col items-center">
                <div class="w-12 bg-sky-600 rounded-t-md"
                    style="height: {{ $summary['barHeights']['total'] }}px;"></div>
                <p class="mt-2 text-sm text-white font-semibold">Total</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-12 bg-green-600 rounded-t-md"
                    style="height: {{ $summary['barHeights']['selesai'] }}px;"></div>
                <p class="mt-2 text-sm text-white font-semibold">Selesai</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-12 bg-red-600 rounded-t-md"
                    style="height: {{ $summary['barHeights']['belum'] }}px;"></div>
                <p class="mt-2 text-sm text-white font-semibold">Belum</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
        <div class="bg-neutral-900 p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-semibold text-white">Total Tugas</h2>
            <p class="text-3xl font-bold text-sky-600 mt-2">{{ $summary['total'] }}</p>
        </div>
        <div class="bg-neutral-900 p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-semibold text-white">Selesai</h2>
            <p class="text-3xl font-bold text-green-600 mt-2">{{ $summary['selesai'] }}</p>
        </div>
        <div class="bg-neutral-900 p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-semibold text-white">Belum Selesai</h2>
            <p class="text-3xl font-bold text-red-600 mt-2">{{ $summary['belum'] }}</p>
        </div>
    </div>
</div>
@endsection
