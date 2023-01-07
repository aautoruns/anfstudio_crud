<?php

namespace App\Controllers;

use App\Models\PortofolioModel;

class Portofolio extends BaseController
{
    protected $portofolioModel;
    public function __construct()
    {
        $this->portofolioModel = new PortofolioModel();
    }

    public function index()
    {
        $data = [
            'portofolio' => $this->portofolioModel->getAllPortofolio()
        ];

        return view('portofolio/index', $data);
    }
    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('portofolio/create', $data);
    }
    public function save()
    {
        // dd(
        //     $this->request->getVar('id'),
        //     $this->request->getVar('nama'),
        //     $this->request->getVar('portofolio'),
        //     $this->request->getVar('gamabar'),
        // );

        if (!$this->validate([
            'nama ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,10024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png,image/webp]',
                'errors' => [
                    'max_size' => 'Pilih File / Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ]
        ])) {
            return redirect()->to('portofolio/create')->withInput();
        }
        // ambil gambar
        $fileSampul = $this->request->getFile('gambar');

        // apakah tidak ada gambar yang di upload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            // generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();

            // pindahkan file ke folder img
            $fileSampul->move('img/portofolio/', $namaSampul);
        }
        // validasi data sukses
        $this->portofolioModel->save([
            'nama' => $this->request->getVar('nama'),
            'gambar' => $namaSampul
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!.');
        return redirect()->to('/portofolio');
    }

    public function edit($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        // jika id data tidak ada di table
        if (empty($data['portofolio'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $id . ' tidak ditemukan');
        };

        return view('portofolio/edit', $data);
    }
}
