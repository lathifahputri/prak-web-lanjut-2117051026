<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $kelasModel;

    public function __construct(){
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),
        ];
        return view('list_kelas', $data);
    }

    public function create(){
        
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create Kelas',
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()
        ];

        return view('create_kelas',$data);
    }

    public function store(){

        // validasi input
        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required|is_unique[kelas.nama_kelas]',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.'
                ]
            ],
            'ruang_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/kelas/create'))->withInput()->with('validation', $validation);
        }

        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'ruang_kelas' => $this->request->getVar('ruang_kelas'),
        ]);
       
        return redirect()->to(base_url('/kelas'));
    }

    public function show($id){
        $kelas = $this->kelasModel->getShowKelas($id);

        $data = [
            'title'  => 'List Detail Kelas',
            'kelas'   => $kelas,
        ];

        return view('kelas', $data);
    }

    public function edit($id){
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',            
            'kelas' => $kelas,
        ];

        return view('edit_kelas', $data);
    }

    public function update($id){
        $data = [
            'nama_kelas'        => $this->request->getVar('nama_kelas'),
            'ruang_kelas'       => $this->request->getVar('ruang_kelas'),
        ];

        $result = $this->kelasModel->updateKelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to('/kelas');
    }

    public function destroy($id){
        $result = $this->kelasModel->deleteKelas($id);
        if (!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/kelas'))
            ->with('success', 'Berhasil menghapus data');
    }
}
