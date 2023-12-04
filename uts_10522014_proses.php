<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $tujuan = $_POST['tujuan'];
        $jenis = $_POST['jenis'];
        $berat = $_POST['berat'];
        $asuransi = $_POST['asuransi'];
       
           $harga = 0;
           
       
           if($jenis == "reguler"){
               if($tujuan == "Bandung"){
                   $harga = 10000;
               }else if($tujuan == "Jakarta"){
                   $harga = 20000;
               }else if($tujuan == "Semarang"){
                   $harga = 30000;
               }
           }else if($jenis == "expres"){
               if($tujuan == "Bandung"){
                   $harga = 12000;
               }else if($tujuan == "Jakarta"){
                   $harga = 24000;
               }else if($tujuan == "Semarang"){
                   $harga = 35000;
               }
           }
       
           $total_harga = $harga * $berat;

           
           if($asuransi == "YA"){
               $biaya_asuransi = 0.07 * $total_harga;
            }else {
                $biaya_asuransi = 0;
            }
            
            $total_bayar = $total_harga + $biaya_asuransi;
            
            // konversi ke rupiah biar keren
            $total_harga = "Rp " . number_format($total_harga,2,",",".");
            $biaya_asuransi = "Rp " . number_format($biaya_asuransi,2,",",".");
            $total_bayar = "Rp " . number_format($total_bayar,2,",",".");


       
           
       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="font-family: 'Nunito Sans', sans-serif; padding-left: 50px; padding-top: 20px; font-size: 25px">
    <p>Nim : 10522014<br>Nama : Arif Nur Ramadhan</p>
    <?php
        echo "<h1>FORM PENGIRIMAN BARANG</h1>";
        echo "<p>Nama Pengirim : $nama<br>No Telepon : $telp<br>Tujuan Pengiriman : $tujuan<br>Jenis Pengiriman : $jenis<br>Berat Barang : {$berat}Kg<br>Asuransi : $asuransi</p>";
        echo "<br><p>BAYAR : $total_harga<br>BIAYA ASURANSI : $biaya_asuransi<br><b>TOTAL BAYAR : $total_bayar</b></p>";
    ?>
<input type="submit" name="print" value="Cetak">
</body>
</html>

