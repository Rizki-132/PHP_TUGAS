<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        h1{
            background-color : Green;
            height: 60px;
            color : Gold;
        }
    </style>
  </head>
  <body>
    <!-- Content here -->
    <div class="container px-5 my-5">
    <h1 class="text-center">Form Data Pegawai</h1>
        <form id="contactForm" method="POST">
            <div class="mb-3">
                <label class="form-label" for="nama">Nama</label>
                <input class="form-control" name="nama" type="text" placeholder="Nama" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="agama">Agama</label>
                <select class="form-select" name="agama" aria-label="Agama">
                    <option value="">-pilih agama-</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="konghucu">konghucu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  id="jabatan" name="jabatan" value="manager" data-sb-validations="required" />
                    <label class="form-check-label" for="manager" >Manager</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" value="asisten" data-sb-validations="required" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" value="kabag" data-sb-validations="required" />
                    <label class="form-check-label" for="jabatan" >Kabag</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" value="staff" data-sb-validations="required" />
                    <label class="form-check-label" for="jabatan" >Staff</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="menikah" data-sb-validations="required" />
                    <label class="form-check-label" for="menikah" >Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status"  value="belum Menikah" data-sb-validations="required" />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jumlahAnak">Jumlah anak</label>
                <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah anak" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah anak is required.</div>
            </div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-success btn-lg" name="proses" type="submit">Save</button>
            </div>
        </form>
        <?php 
        // Deklarasi
        $nama = $_POST['nama'];
        $agama= $_POST['agama'];
        $jbtn = $_POST['jabatan'];
        $status = $_POST['status'];
        $jmlahanak = $_POST['jumlahAnak'];
        $tombol = $_POST['proses'];
        
         // gaji pokok
        switch ($jbtn) {
            case 'manager' :
                $gapok = 20000000 ; 
                break;
            case 'asisten' :
                $gapok = 15000000 ; 
                break;
            case 'kabag' : 
                $gapok = 10000000 ; 
                break;
            case 'staff' : 
                $gapok = 4000000 ;
                break;
            default : 
                 $gapok = 20000000 ;
                break;
        }

        // tunjangan keluarga
        if($status =="menikah" && $jmlahanak >=2 )$tunkel = 0.005 * $gapok;
        elseif($status && $jmlahanak >=3 && $jmlahanak <= 5) $tunkel = 0.1 * $gapok;
        elseif($status && $jmlahanak > 5) $tunkel = 0.25 * $gapok;
        else $tunkel = 0;

        // tentukan 
        $tunjab = 2.0 * $gapok;
        $gator = $gapok + $tunjab + $tunkel;
        $zakat = 0.25 * $gator;
        // zakat 
        if ($agama == "islam" && $gator >= 6000000)$zakat ;
        else $zakat = 0;

        // Take home pay
        $takePay = $gator - $zakat;
        
        if(isset($tombol)){?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">status</th>
                    <th scope="col">Jumlah Anak</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Tunjangan Jabatan</th>
                    <th scope="col">Tunjangan Keluarga</th>
                    <th scope="col">Gaji kotor</th>
                    <th scope="col">Zakat Profesi</th>
                    <th scope="col">Take Home Pay</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?= $nama ?></th>
                    <td><?= $agama ?></td>
                    <td><?= $jbtn ?></td>
                    <td><?= $status ?></td>
                    <td><?= $jmlahanak?></td>
                    <td>Rp.<?= number_format($gapok , 2,",","." )?></td>
                    <td>Rp.<?= number_format($tunjab , 2,",","." )?></td>
                    <td>Rp.<?= number_format($tunkel , 2,",","." )?></td>
                    <td>Rp.<?= number_format($gator , 2,",","." )?></td>
                    <td>Rp.<?= number_format($zakat , 2,",","." )?></td>
                    <td>Rp.<?= number_format($takePay , 2,",","." )?></td>
                </tr>
            </tbody>
            </table>
        <?php } ?>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>