<html>
    <head>
        <title>Hasil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h2>Data Registrasi</h2>
    <?php
    error_reporting(0);
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tmptlhr=$_POST['tmptlhr'];
    $tgllhr=$_POST['tgllhr'];
    $jnsklmn=$_POST['jnsklmn'];
    $pendidikan=$_POST['pendidikan'];
    ?>
    <div class="row">
        <div class="col -6">
        <table class="table table-bordered border-dark">
            <tr>
                <td>Nama</td>
                <td><?= $nama;?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $alamat;?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?= $tmptlhr;?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $tgllhr;?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $jnsklmn;?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td><?= $pendidikan;?></td>
            </tr>
        </table>
        </div>
        <a href="tugas06.php"><I>Back To Home</I></a>
    </div>
    <?php ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      
    </body>