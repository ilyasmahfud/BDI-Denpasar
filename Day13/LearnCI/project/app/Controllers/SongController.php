<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Song;

class SongController extends BaseController
{
    public $songs;

    public function __construct()
    {
        $this->songs = new Song();
    }

    public function index()
    {
        $data = $this->songs->findAll();
        // d($data);
        // return View('song', ['data'=>$data]);
        // atauq
        return View('song', compact('data'));
    }

    public function addSongForm()
    {
        return View('addSong');
    }

    public function addNewSong()
    {
        // VALISADI IRFAN
        // helper('form');
        // if ($this->request->getMethod() == 'post') {
        //     $input = $this->validate([
        //         'title' => 'required|is_unique[songs.title]',
        //         // 'duration' => 'required|numeric|less_than_equal_to[5]',
        //         'duration' => 'required',
        //         'singer' => 'required',
        //         'label' => 'required',
        //         'releaseDate' => 'required',
        //         // 'releaseDate' => 'required|date',
        //         'album' => 'required'
        //     ]);

        //     if (!$input) {
        //         // echo "Gall";
        //         session()->setFlashdata('error');
        //         return View('addSong', [
        //             'validation' => $this->validator
        //         ]);
        //     } else {
        //         $songs = [
        //             'title' => $this->request->getPost('title'),
        //             'duration' => $this->request->getPost('duration'),
        //             'singer' => $this->request->getPost('singer'),
        //             'label' => $this->request->getPost('label'),
        //             'releaseDate' => $this->request->getPost('releaseDate'),
        //             'album' => $this->request->getPost('album'),
        //         ];
        //         $addSong = $this->songs;
        //         if ($addSong->insert($songs)) {
        //             session()->setFlashdata('success', 'Data created successfully');
        //             return redirect('songs');
        //         } else {
        //             echo "GAGAL";
        //         }
        //     }
        // }

        // VALIDASI WAHYU
        if (!$this->validate([
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    // 'uploaded' => 'Pilih gambar foto terlebih dahulu',
                    'max_size' => 'Ukuran file melebihi 1 MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Gambar harus berekstensi jpg/jpeg/png'
                ]
            ],
            'title' => [
                'rules' => 'required|is_unique[songs.title]',
                'errors' => [
                    'required' => '{field} harus di isi',
                    'is_unique' => ' {field} sudah ada, ganti yang lain'
                ],
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    // 'is_unique' => 'sudah ada, ganti yang lain',
                    'required' => '{field} harus di isi'
                ],
            ],
            'singer' => [
                'rules' => 'required',
                'errors' => [
                    // 'is_unique' => 'sudah ada, ganti yang lain',
                    'required' => '{field} harus di isi'
                ],
            ],
            'label' => [
                'rules' => 'required',
                'errors' => [
                    // 'is_unique' => 'sudah ada, ganti yang lain',
                    'required' => '{field} harus di isi'
                ],
            ],
            'releaseDate' => [
                'rules' => 'required',
                'errors' => [
                    // 'is_unique' => 'sudah ada, ganti yang lain',
                    'required' => '{field} harus di isi'
                ],
            ],
            'album' => [
                'rules' => 'required',
                'errors' => [
                    // 'is_unique' => 'sudah ada, ganti yang lain',
                    'required' => '{field} harus di isi'
                ],
            ]
        ])) {
            // session()->setFlashdata('errors', $this->validator->listErrors());
            // $validation = \config\Services::validation();
            // return redirect()->to('/songs/add')->withInput()->with('validation', $validation);
            return redirect()->to('/songs/add')->withInput();
        } else {
            // get gambar
            $fileFoto = $this->request->getFile('foto');
            // default picture
            if ($fileFoto->getError() == 4) {
                $namaFoto = 'profil-default.png';
            } else {
                // generate nama sampul random
                $namaFoto = $fileFoto->getRandomName();
                // pindahkan ke folder img
                $fileFoto->move('img');
                // ambil nama file
                // $namaFoto = $fileFoto->getName();

                // dd($namaFoto);
            }

            // input ke database
            $this->songs->save([
                'foto' => $namaFoto,
                'title' => $this->request->getPost('title'),
                'duration' => $this->request->getPost('duration'),
                'singer' => $this->request->getPost('singer'),
                'label' => $this->request->getPost('label'),
                'releaseDate' => $this->request->getPost('releaseDate'),
                'album' => $this->request->getPost('album'),
            ]);

            session()->setFlashdata('success', 'Data Created Successfully');

            return redirect('songs');
        }
    }

    public function editSongForm($id)
    {
        $data = $this->songs->find($id);
        // dd($data);
        return View('editSong', compact('data'));
    }

    public function updateSong($id)
    {

        $this->songs->update($id, [
            'title' => $this->request->getPost('title'),
            'duration' => $this->request->getPost('duration'),
            'singer' => $this->request->getPost('singer'),
            'label' => $this->request->getPost('label'),
            'releaseDate' => $this->request->getPost('releaseDate'),
            'album' => $this->request->getPost('album'),
        ]);

        return redirect('songs')->with('success', 'Data Updated Successfully');
    }

    public function deleteSong($id)
    {
        // cari gambar
        $song = $this->songs->find($id);
        // filter gambarprofile-default
        if ($song['foto'] != 'profil-default.png') {
            // hapus gambar
            unlink('img/' . $song['foto']);
        }

        $this->songs->delete($id);

        session()->setFlashdata('success', 'Data Deleted Successfully');

        return redirect()->to('/songs');
    }
}
