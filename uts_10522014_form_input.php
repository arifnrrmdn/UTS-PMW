<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="height: 100%; font-family: 'Nunito Sans', sans-serif;">
    <p>Nim : 10522014<br>Nama : Arif Nur Ramadhan</p>
    
    <div class="box" style="display: flex; justify-content: center; padding-top: 20px">
        <form name="input" method="POST" action="uts_10522014_proses.php">
        <h1 style="padding-bottom: 20px">FORM PENGIRIMAN BARANG</h1>
        <div class="mb-3">
         <label class="form-label">Nama Pengirim : </label>
         <input type="text" name="nama" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Telepon : </label>
            <input type="tel" name="telp" class="form-control" >
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" >Tujuan Pengiriman : </label>
            <select class="form-select" name="tujuan">
                <option selected>Choose...</option>
                <option value="Bandung">Bandung</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Semarang">Semarang</option>
            </select>
        </div>
        <p>Jenis Pengiriman : 
            <input name="jenis" type="radio" value="reguler"> REGULER
            <input name="jenis" type="radio" value="expres"> EXPRES     
        </p>
        <div class="mb-3">
        <label class="form-label">Berat : </label> <input type="number" name="berat" class="form-control" >
        </div>
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Asuransi : </label>
        <select class="form-select" id="inputGroupSelect01" name="asuransi">
            <option selected>Choose...</option>
            <option value="YA">YA</option>
            <option value="TIDAK">TIDAK</option>

        </select>
        </div>
        

        <!-- <p>Nama Pengirim : <input type="text" name="nama"></p>
        <p>Nomor Telepon : <input type="tel" name="telp"></p>
        <p>Tujuan Pengiriman : <select name="tujuan">
            <option value="">_=Pilih=_</option>
            <option value="Bandung">Bandung</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Semarang">Semarang</option>
        </select></p>
        <p>Jenis Pengiriman : 
            <input name="jenis" type="radio" value="reguler"> REGULER
            <input name="jenis" type="radio" value="expres"> EXPRES     
        </p>
        <p>Berat Barang : <input type="number" name="berat"></p>
        <p>Asuransi : <select name="asuransi">
            <option value="">_=Pilih=_</option>
            <option value="YA">Ya</option>
            <option value="TIDAK">Tidak</option>
        </select></p> -->


        <input type="submit" name="submit" value="Submit"> | <input type="reset" name="reset" value="Reset">
    </form>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>