<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
{
    return view('login');
}

public function dashboard(Request $request)
{
    $jumlah = [

        [
            'nama' => 'Total Karyawan',
            'icon' => '👤',
            'value' => '100',
        ],
        [
            'nama' => 'Total Divisi',
            'icon' => '🚪',
            'value' => '5',
        ],
    ];



    $divisi = [
        [
            'title' => 'Divisi Produksi',
            'icon' => '👤',
            'value' => '40',
        ],
        [
            'title' => 'Divisi Marketing',
            'icon' => '👤',
            'value' => '15',
        ],
        [
            'title' => 'Divisi Keuangan',
            'icon' => '👤',
            'value' => '10',
        ],
        [
            'title' => 'Executive',
            'icon' => '👤',
            'value' => '5',
        ],
        [
            'title' => 'Divisi IT',
            'icon' => '👤',
            'value' => '15',
        ],
        [
            'title' => 'Divisi Hukum',
            'icon' => '👤',
            'value' => '15',
        ],
    ];

    $username = $request->query('username');


    return view('dashboard', compact('jumlah', 'divisi', 'username'));
}

public function login_submit(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');



    return redirect()->route('dashboard', ['username' => $username]);
}

public function logout()
{
    return redirect()->route('login');
}
public function pengelolaan(Request $request)
{
    $karyawan = [
        [
            'nama' => 'Ken',
            'divisi' => 'Hukum',
            'umur' => '20',
        ],
        [
            'nama' => 'Yanto',
            'divisi' => 'Produksi',
            'umur' => '30',
        ],
        [
            'nama' => 'Tyo',
            'divisi' => 'Keuangan',
            'umur' => '40',
        ],
        [
            'nama' => 'Rahar',
            'divisi' => 'Hukum',
            'umur' => '30',
        ],
        [
            'nama' => 'Richie',
            'divisi' => 'IT',
            'umur' => '40',
        ],
        [
            'nama' => 'Aan',
            'divisi' => 'Marketing',
            'umur' => '50',
        ],
        [
            'nama' => 'Fathan',
            'divisi' => 'IT',
            'umur' => '50',
        ],
        [
            'nama' => 'Felix',
            'divisi' => 'Marketing',
            'umur' => '60',
        ],
        [
            'nama' => 'Rijal',
            'divisi' => 'Hukum',
            'umur' => '40',
        ],
        [
            'nama' => 'Almas',
            'divisi' => 'Produksi',
            'umur' => '100',
        ],
        [
            'nama' => 'Tomas',
            'divisi' => 'Produksi',
            'umur' => '60',
        ],
    ];


    $username = $request->query('username');

    return view('pengelolaan', compact('karyawan', 'username'));
}

public function profile(Request $request)
{
    $username = $request->query('username');
    return view('profile', compact('username'));
}
}
