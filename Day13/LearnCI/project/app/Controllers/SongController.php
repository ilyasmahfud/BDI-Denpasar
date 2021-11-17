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

    public function addSong()
    {
        $this->songs->insert([
            'title' => $this->request->getPost('title'),
            'duration' => $this->request->getPost('duration'),
            'singer' => $this->request->getPost('singer'),
            'label' => $this->request->getPost('label'),
            'releaseDate' => $this->request->getPost('releaseDate'),
            'album' => $this->request->getPost('album'),
        ]);
         
        return redirect('songs')->with('success', 'Data Added Successfully');
    }
}
