<?php
require_once 'Bentuk2D.php';

class segitiga extends Bentuk2D{

    public $alas ;
    public $tinggi ;
    const set = 0.5;

    public function __construct($alas,$tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function NamaBidang(){

        $nama = "Segitiga siku";

        return $nama;
    }

    public function LuasBidang(){

        $luas = segitiga::set * $this->alas * $this->tinggi;
        return $luas;
    }

    public function KelilingBidang(){

        $sisi =sqrt(pow($this->alas + $this->tinggi ,2));
        $keliling = $sisi + $sisi +$sisi;
        return $keliling;
    }
    
    public function keterangan(){
        return"
        Alas : ".$this->alas."<br/>;
        Tinggi : ".$this->tinggi."<br/>;
        ";
    }
}