<?php
class Tumbuhan
{
    public $fotosintesis, $daun, $akar, $batang, $bunga, $serbuk, $buah;

    public function berfotosintesis($berfotosintesis) {
        return $this -> fotosintesis = $berfotosintesis;
    }
    
    public function berakar($berakar) {
        return $this -> akar = $berakar;
    }

    public function berdaun($berdaun) {
        return $this -> daun = $berdaun;
    }

    public function berbatang($berbatang) {
        return $this -> batang = $berbatang;
    }

    public function berbungan($berbunga) {
        return $this -> bunga = $berbunga;
    }

    public function berserbuk($berserbuk) {
        return $this -> serbuk = $berserbuk;
    }

    public function berbuah($berbuah){
        return $this -> buah = $berbuah;
    }

    public function getData(){
        return [
            'fotosintesis' => $this -> fotosintesis,
            'akar' => $this -> akar,
            'daun' => $this -> daun,
            'batang' => $this -> batang,
            'bunga' => $this -> bunga,
            'serbuk' => $this -> serbuk,
            'buah' => $this -> buah,
        ];
    }
    public function getDatas(){
        return [
            $this -> fotosintesis,
            'akar' => $this -> akar,
            'daun' => $this -> daun,
            'batang' => $this -> batang,
            'bunga' => $this -> bunga,
            'serbuk' => $this -> serbuk,
            'buah' => $this -> buah,
        ];
    }
}
?>