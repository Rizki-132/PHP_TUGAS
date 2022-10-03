<?php

require_once 'Bentuk2D.php';

class Persegipanjang extends Bentuk2D{

    public $panjang ;
    public $lebar ;

    public function __construct($panjang,$lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function NamaBidang(){

        $nama = "Persegi Panjang";

        return $nama;
    }

    public function LuasBidang(){

        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function KelilingBidang(){

        $keliling = (2 * $this->panjang) + (2* $this->lebar);
        return $keliling;
    }
    
    public function keterangan(){
        return"
        Panjang : ".$this->panjang."<br/>;
        Panjang : ".$this->lebar."<br/>;
        ";
    }
}