<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }


    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'Iqbal' && $password === '111') {
            session(['username' => $username]);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau password salah!');
    }


    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }


    public function dashboard()
    {
        $username = session('username');

        $data = $this->getTasks();
        $tasks = $data['tasks'];
        $listStatus = $data['listStatus'];

        $summary = [
            'total'   => count($tasks),
            'selesai' => collect($tasks)->where('status', $listStatus[1])->count(),
            'belum'   => collect($tasks)->where('status', $listStatus[0])->count(),
        ];

        $maxHeight = 240;
        $maxValue = max($summary['total'], $summary['selesai'], $summary['belum']) ?: 1;

        $barHeights = [
            'total'   => ($summary['total'] / $maxValue) * $maxHeight,
            'selesai' => ($summary['selesai'] / $maxValue) * $maxHeight,
            'belum'   => ($summary['belum'] / $maxValue) * $maxHeight,
        ];

        $summary['barHeights'] = $barHeights;

        return view('dashboard', compact('username', 'summary'));
    }


    public function pengelolaan()
    {
        $data = $this->getTasks();
        $tasks = $data['tasks'];
        $listStatus = $data['listStatus'];

        return view('pengelolaan', compact('tasks', 'listStatus'));
    }


    public function profile()
    {
        $username = session('username');

        $profile = [
            'nama' => 'Iqbal Rizaldi',
            'nim' => '242410102052',
            'prodi' => 'Teknologi Informasi',
            'fakultas' => 'Ilmu Komputer',
            'image' => 'storage/img/profile-iqbal.png'
        ];

        return view('profile', compact('profile', 'username'));
    }


    private function getTasks(): array
    {
        $listStatus = ['belum', 'done!!'];

        $tasks = [
            [
                'mata_kuliah' => 'Metodologi Penelitian',
                'deskripsi' => 'Buat PPT penjelasan penelitian kualitatif dan kuantitatif',
                'deadline' => '20 Oktober 2025',
                'status' => $listStatus[1]
            ],
            [
                'mata_kuliah' => 'Tata Kelola Teknologi Informasi',
                'deskripsi' => 'UTS (kelompok 4 orang)',
                'deadline' => '21 Oktober 2025',
                'status' => $listStatus[1]
            ],
            [
                'mata_kuliah' => 'Pemrograman SQL (PR)',
                'deskripsi' => 'Modul W9 Function',
                'deadline' => '22 Oktober 2025',
                'status' => $listStatus[1]
            ],
            [
                'mata_kuliah' => 'Pemrograman Website (TM)',
                'deskripsi' => 'Buat migration dan seeder',
                'deadline' => '22 Oktober 2025',
                'status' => $listStatus[0]
            ],
            [
                'mata_kuliah' => 'Pemrograman Website (PR)',
                'deskripsi' => 'UTS membuat mini project laravel',
                'deadline' => '23 Oktober 2025',
                'status' => $listStatus[1]
            ],
            [
                'mata_kuliah' => 'UI/UX Design (PR)',
                'deskripsi' => 'Tahap Prototype (kelompok 4 orang)',
                'deadline' => '29 Oktober 2025',
                'status' => $listStatus[0]
            ],
            [
                'mata_kuliah' => 'Manajemen Risiko',
                'deskripsi' => 'Tugas Akhir (kelompok 4 orang)',
                'deadline' => '17 November 2025',
                'status' => $listStatus[0]
            ],
        ];

        return compact('tasks', 'listStatus');
    }
}
