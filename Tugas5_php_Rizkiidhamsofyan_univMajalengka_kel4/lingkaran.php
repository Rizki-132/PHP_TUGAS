<?php


require_once 'Bentuk2D.php';

class lingkaran extends Bentuk2D{

    public $jari2 ;
    const PHI = 3.14 ;

    public function __construct($jari2)
    {
        $this->jari = $jari2;
    }

    public function NamaBidang(){

        $nama = "Lingkaran";

        return $nama;
    }

    public function LuasBidang(){

        $luas =lingkaran::PHI * pow($this->jari, 2);
        return $luas ;
    }

    public function KelilingBidang(){

        $keliling = lingkaran::PHI * (2 * $this->jari);
        return $keliling;
    }
    
    public function keterangan(){
        return"
        Jari - Jari : ".$this->jari."<br/>.
        ";
    }
}