<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>PENDAFTARAN DIKLAT</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PESERTA DIKLAT
            </div>
            <div class="card-body">
              <form action="simpan-peserta.php" method="POST">

                  <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" placeholder="Masukkan NIP anda" class="form-control">
                </div>


                <div class="form-group">
                  <label>tanggal_lahir</label>
                  <input type="text" name="tanggal_lahir" placeholder="Masukkan tanggal_lahir anda" class="form-control">
                </div>

                 <div class="form-group">
                  <label>alamat</label>
                  <input type="text" name="alamat" placeholder="Masukkan alamat anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>tempat_tanggal_diklat</label>
                  <input type="text" name="tempat_tanggal_diklat" placeholder="Masukkan Tempat tanggal diklat" class="form-control">
                </div>

               <div class="form-group">
                  <label>jenis_diklat</label>
                  <input type="text" name="jenis_diklat" placeholder="Masukkan jenis_diklat" class="form-control">
                </div>
                  <div class="form-group">
                   <p>
            <label for="">Golongan: </label>
            <select name="golongan">
                <option>Pilih</option>
                <option>I/a</option>
                <option>I/b</option>
                <option>I/c</option>
                <option>I/d</option>
                <option>II/a</option>
                <option>II/b</option>
                <option>II/c</option>
                <option>II/d</option>
                <option>III/a</option>
                <option>III/b</option>
                <option>III/c</option>
                <option>III/d</option>
                <option>IV/a</option>
                <option>IV/b</option>
                <option>IV/c</option>
                <option>IV/d</option>
            </select>
        </p>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>