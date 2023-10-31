<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>Form Registrasi<h2></td>
</tr>
<h6>Isi Data Dibawah Ini :<h6>
<form action="tugas06proses.php" method="POST">
        <div class="row mb-2">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda">
        </div>
        </div>
        <div class="row mb-2">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-5">
            <textarea class="form-control" name="alamat" id="alamat" rows="5"  placeholder="Alamat Anda"></textarea>
        </div>
        </div>
        <div class="row mb-2">
            <label for="tmptlhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="tmptlhr" id="tmptlhr" placeholder="Tempat Lahir Anda">
        </div>
        </div>
        <div class="row mb-2">
            <label for="tgllhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="tgllhr" id="tgllhr" placeholder="Tanggal Lahir Anda">
        </div>
        </div>
        <div class="row mb-2">
            <label for="jnsklmn" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jnsklmn" id="jnsklmn1" value="Laki-Laki">
            <label class="form-check-label" for="jnsklmn1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jnsklmn" id="jnsklmn2" value="Perempuan">
            <label class="form-check-label" for="jnsklmn2">Perempuan</label>
        </div>
        </div>
        </div>
        <div class="row mb-2">
            <label for="pendididkan" class="col-sm-2 col-form-label">Pendidikan</label>  
        <div class="col-sm-3">
            <select class="form-select" aria-label="Default select example" id="pendiddikan"
            name="pendidikan">
            <option>Pilih</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            </select>
        </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="reset" class="btn btn-default">Cancel</button>
        </div>
        </form>
        </div>
        </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>