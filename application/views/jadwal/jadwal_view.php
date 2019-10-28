<!DOCTYPE html>
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


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo site_url('mahasiswa') ?>">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('mahasiswa') ?>">Mahasiswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('jadwal') ?>">Jadwal</a>
      </li>
    </ul>
  </div>
</nav>


<!-- Table -->
<div class="container">
    <h1 class="text-center mt-2">Data Jadwal</h1>
    <a class="btn btn-success" href="<?php echo site_url('jadwal/add') ?>" role="button" style="margintop:30px; margin-bottom:5px;">Tambah</a>

    <table class="table table-striped table-primary" >
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">KODE MAKUL</th>
                <th scope="col">NAMA MAKUL</th>
                <th scope="col">KELAS</th>
                <th scope="col">NAMA DOSEN</th>
                <th scope="col">RUANGAN</th>
                <th scope="col">HARI</th>
                <th scope="col">SESI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no =1; ?>
            <?php foreach($jadwal as $jadwals): ?>
            <tr class="table-success">
                <td><?php echo $no++; ?></td>
                <td><?php echo $jadwals->kode_makul ?></td>
                <td><?php echo $jadwals->nama_makul ?></td>
                <td><?php echo $jadwals->kelas ?></td>
                <td><?php echo $jadwals->nama_dosen ?></td>
                <td><?php echo $jadwals->ruangan ?></td>
                <td><?php echo $jadwals->hari ?></td>
                <td><?php echo $jadwals->sesi ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>

</html>