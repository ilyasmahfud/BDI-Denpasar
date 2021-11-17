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
        // atau
        return View('song', compact('data'));
    }

    public function addSongForm(){
        return View('addSong');
    }

    public function addNewSong()
    {
        $this->songs->insert([
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

    public function editSongForm($id){
        $data = $this->songs->find($id);
        // dd($data);
        return View('editSong', compact('data'));
    }
    
    public function updateSong($id){
        
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

    public function deleteSong($id){

        $this->songs->delete($id);

        session()->setFlashdata('success', 'Data Deleted Successfully');

        return redirect('songs');
    }
}
