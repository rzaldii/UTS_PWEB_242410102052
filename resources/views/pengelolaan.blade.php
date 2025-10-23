@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center text-white">Daftar Tugas</h1>
<div class="overflow-x-auto rounded-xl shadow-md">
    <table class="min-w-full bg-neutral-900 rounded-xl shadow-md">
        <thead>
            <tr class="bg-slate-800 text-white text-center">
                <th class="py-4 px-4">NO</th>
                <th class="py-3 px-4">Mata Kuliah</th>
                <th class="py-3 px-4">Deskripsi</th>
                <th class="py-3 px-4">Deadline</th>
                <th class="py-3 px-4">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr class="border-b hover:bg-neutral-800 text-center">
                    <td class="py-2 px-4">{{ $loop->iteration}}</td>
                    <td class="py-3 px-4">{{ $task['mata_kuliah'] }}</td>
                    <td class="py-3 px-4">{{ $task['deskripsi'] }}</td>
                    <td class="py-3 px-4">{{ $task['deadline'] }}</td>
                    <td class="py-3 px-4">
                        @if($task['status'] === $listStatus[1])
                            <span class="bg-green-600 text-white px-3 py-1 rounded-full font-semibold">{{ $task['status'] }}</span>
                        @elseif($task['status'] === $listStatus[0])
                            <span class="bg-red-600 text-white px-3 py-1 rounded-full font-semibold">{{ $task['status'] }}</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
