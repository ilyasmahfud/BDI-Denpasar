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
        helper('form');
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'title' => 'required',
                // 'duration' => 'required|numeric|less_than_equal_to[5]',
                'duration' => 'required',
                'singer' => 'required',
                'label' => 'required',
                'releaseDate' => 'required',
                // 'releaseDate' => 'required|date',
                'album' => 'required'
            ]);
            
            if (!$input) {
                // echo "Gall";
                session()->setFlashdata('error');
                return View('addSong',[
                    'validation' => $this->validator
                ]);
            } else{
                $songs = [
                    'title' => $this->request->getPost('title'),
                    'duration' => $this->request->getPost('duration'),
                    'singer' => $this->request->getPost('singer'),
                    'label' => $this->request->getPost('label'),
                    'releaseDate' => $this->request->getPost('releaseDate'),
                    'album' => $this->request->getPost('album'),
                ];
                $addSong = $this->songs;
                if ($addSong->insert($songs)) {
                    session()->setFlashdata('success','Data created successfully');
                    return redirect('songs');
                } else {
                    echo "GAGAL";
                }
            }
        }

        // VALIDASI WAHYU
        // if (!$this->validate([
        //     'title' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             // 'is_unique' => 'sudah ada, ganti yang lain',
        //             'required' => '{field} harus di isi'
        //         ],
        //     ],
        //     'duration' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             // 'is_unique' => 'sudah ada, ganti yang lain',
        //             'required' => '{field} harus di isi'
        //         ],
        //     ],
        //     'singer' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             // 'is_unique' => 'sudah ada, ganti yang lain',
        //             'required' => '{field} harus di isi'
        //         ],
        //     ],
        //     'label' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             // 'is_unique' => 'sudah ada, ganti yang lain',
        //             'required' => '{field} harus di isi'
        //         ],
        //     ],
        //     'releaseDate' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             // 'is_unique' => 'sudah ada, ganti yang lain',
        //             'required' => '{field} harus di isi'
        //         ],
        //     ],
        //     'album' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             // 'is_unique' => 'sudah ada, ganti yang lain',
        //             'required' => '{field} harus di isi'
        //         ],
        //     ],
        // ])) {
        //     session()->setFlashdata('errors', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // } else {
        //     $this->songs->insert([
        //         'title' => $this->request->getPost('title'),
        //         'duration' => $this->request->getPost('duration'),
        //         'singer' => $this->request->getPost('singer'),
        //         'label' => $this->request->getPost('label'),
        //         'releaseDate' => $this->request->getPost('releaseDate'),
        //         'album' => $this->request->getPost('album'),
        //     ]);

        //     session()->setFlashdata('success', 'Data Created Successfully');

        //     return redirect('songs');
        // }
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

        $this->songs->delete($id);

        session()->setFlashdata('success', 'Data Deleted Successfully');

        return redirect('songs');
    }
}
