<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function profile($nama = '', $kelas = '', $npm = ''){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create(){
        // $kelasModel = new KelasModel();
        // $kelas = $kelasModel->getKelas();
        $kelas = $this->kelasModel->getKelas();

        //  $kelas = [
        //     [
        //         'id' => 1,
        //         'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C'
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D'
        //     ],
        //  ];

         if (session('validation') != null) {
            $validation = session('validation');
        } else {
            $validation = \Config\Services::validation();
        }

         $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
            'validation' => $validation,
         ];

        return view('create_user', $data);
    }

    public function store(){
        //dd($this->request->getVar());

        // validasi input
        if(!$this->validate([
            'nama' => 'required',
            'npm' => 'required',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
            
            //dd($validation); 
            // return redirect()->to(base_url('/user/create'));
        } 

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas'),
        ]);

        $userModel = new UserModel();
        $kelasModel = new KelasModel();
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $kelas = $this->request->getPost('kelas');

        $data=[
            'title' => 'Create User',
            'nama' => $nama,
            'npm' => $npm,
            'id_kelas' => $kelas
        ];

        // $userModel->saveUser($data);
        $data_new=[
            'nama' => $nama,
            'npm' => $npm,
            'id_kelas' => $kelasModel->find($kelas)['nama_kelas']
        ];

        // return view('profile', $data_new);
        return redirect()->to('/user');
    }
}