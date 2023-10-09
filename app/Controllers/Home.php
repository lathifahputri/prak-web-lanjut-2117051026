<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    // public function profile(): string
    // {
    //     $data = [
    //         'nama' => 'Lathifah Putri',
    //         'npm' => '2117051026',
    //         'kelas' => 'AB'
    //     ];

    //     return view('profile', $data);
    // }

    // public function profile($nama = "", $kelas = "", $npm = "")
    // {
    //     $data = [
    //         'nama' => $nama,
    //         'kelas' => $kelas,
    //         'npm' => $npm
    //     ];

    //     return view('profile', $data);
    // }
}
