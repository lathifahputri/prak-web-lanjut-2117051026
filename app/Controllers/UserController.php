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
            'users' => $this->userModel->getUsers(),
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
        
        $kelas = $this->kelasModel->getKelas();

       
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
        $path = 'assets/upload/img/';

        $foto = $this->request->getFile('foto');

        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto = base_url($path. $name);
        }

        // validasi input
        if(!$this->validate([
            'nama' => 'required',
            'npm' => 'required|is_unique[user.npm]',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
            
            //dd($validation); 
            // return redirect()->to(base_url('/user/create'));
        } 

        $this->userModel->saveUser([
            'nama'      => $this->request->getVar('nama'),
            'npm'       => $this->request->getVar('npm'),
            'id_kelas'  => $this->request->getVar('kelas'),
            'foto'      => $foto
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

    public function show($id){
        $user = $this->userModel->getUsers($id);

        $data = [
            'title'  => 'Profile',
            'user'   => $user,
        ];

        return view('profile', $data);
    }

    public function edit($id){
        $user = $this->userModel->getUsers($id);
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Edit User',
            'user'  => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    public function update($id){
        $path = 'assets/upload/img/';
        $foto = $this->request->getFile('foto');
        $foto_path = '';

        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
            }
        }

        $data = [
            'nama'      => $this->request->getVar('nama'),
            'id_kelas'  => $this->request->getVar('kelas'),
            'npm'       => $this->request->getVar('npm'),
            'foto'      => $foto_path
        ];

        $result = $this->userModel->updateUser($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to('/user');
    }

    public function destroy($id){
        $result = $this->userModel->deleteUser($id);
        if (!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/user'))
            ->with('success', 'Berhasil menghapus data');
    }
}