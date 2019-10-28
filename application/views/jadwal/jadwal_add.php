<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Guided Modul 6</title>
</head>
<body>
    <div class="container">
        <div class="card mb-3" style="50%; margin-top:50px;">
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <div class="card-header">
                <a href="<?php echo site_url('jadwal') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body">
                <h1 class="text-center">Tambah Data Jadwal</h1>
                    <form action="<?php base_url('jadwal/add') ?>" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="kode_makul">Kode Makul</label>
                            <input class="form-control" type="text" name="kode_makul" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama_makul">Nama Makul</label>
                            <input class="form-control" type="text" name="nama_makul" required/>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input class="form-control" type="text" name="kelas" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input class="form-control" type="text" name="nama_dosen" required/>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input class="form-control" type="text" name="ruangan" required/>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input class="form-control" type="text" name="hari" required/>
                        </div>
                        <div class="form-group">
                            <label for="sesi">Sesi</label>
                            <select class="form-control" name="sesi" required>
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                    </form>
            </div>
        </div>
    </div>
</body>
</html>