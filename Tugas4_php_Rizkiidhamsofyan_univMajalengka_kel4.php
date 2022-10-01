<?php
// klu dari tugas 4
class Pegawai{
    public $nip ,$nama, $jabatan, $agama , $status;

    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan =$jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    public function setGajiPokok($jabatan)
    {
        $gapok = 0;
        switch ($jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Assmen':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
        }
        return $gapok;
    }
    public function setTunjab($tunjab)
    {
        $tunjab = 0.2 * $this->setGajiPokok($this->jabatan);
        return $tunjab;
    }

    public function setTunkel($status)
    {
       $this->status = $status;

       $tunkel = ($status == 'Menikah') ? 0.1 * $this->setGajiPokok($this->jabatan) : 0;

       return $tunkel;
    }

    public function setZakatProfesi($agama)
    {
        $this->agama = $agama ;
        $gator = $this->setGajiPokok($this->jabatan) + $this->setTunjab($tunjab) + $this->setTunkel($this->status);
        if($agama == 'islam' && $this->setGajiPokok($this->jabatan) >= 600000) $zakat = 0.25 * $gator;
        else $zakat = 0; 

        return $zakat;
    }

    public function mencetak()
    {
        echo '<table>';
        echo '<tr>';
        echo '<td> Nip </td> <td> : '.$this->nip.'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td> Nama </td> <td> : '.$this->nama .'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td> Jabatan                 </td> <td>: '.$this->jabatan.'</td>' ;
        echo '</tr>';
        echo '<tr>';
        echo '<td> Agama                   </td> <td>: '.$this->agama .'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td> Status                  </td> <td>: '.$this->status .'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td> Gaji Pokok              </td> <td>: Rp.'.number_format($this->setGajiPokok($this->jabatan) , 2,',','.').'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td> Tunjangan Jabatan       </td> <td>: Rp.'.number_format($this->setTunjab($tunjab) , 2,',','.').'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td> Tunjangan Keluarga      </td> <td>: Rp.'.number_format($this->setTunkel($this->status), 2,',','.').'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Tunjangan Zakat Profesi  </td> <td>: Rp.'.number_format($this->setZakatProfesi($this->agama) , 2,',','.').'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '</table>';
        echo '<hr/>';

    }
}
    $Dendi = new Pegawai('002', 'Dendi','Assmen','islam','Menikah');
    $Riza = new Pegawai('003','Riza', 'Manager','islam','Belum Menikah');
    $Amam = new Pegawai('004','Amam','Staff','islam', 'Menikah');
    $Sofyan = new Pegawai('005','Sofyan','Kabag','islam','Belum Menikah');
    $Hendar = new Pegawai('006','Hendar','Staff','islam','Menikah');


    $Dendi->mencetak();
    $Riza->mencetak();
    $Amam->mencetak();
    $Sofyan->mencetak();
    $Hendar->mencetak();
?>