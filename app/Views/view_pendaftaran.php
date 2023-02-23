<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Pendaftaran siswa</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
 <h1>Pendaftaran Siswa</h1>
 <div class="container">

  <a href="<?= base_url('view_tambah')?>" class="btn btn-primary">Daftar Disini</a>
  <table class="table">
   <thead>
    <tr>
     <th scope="col">No</th>
     <th scope="col">Nama</th>
     <th scope="col">Alamat</th>
     <th scope="col">Jenis Kelamin</th>
     <th scope="col">Agama</th>
     <th scope="col">Sekolah Asal</th>
     <th scope="col">Aksi</th>
    </tr>
   </thead>
   <tbody>
    <!-- queri menampilkan data -->
    <?php $no =1;?>
    <?php foreach ($data as $item) : ?>
     
     <tr>
     <th scope="row"><?= $no++?></th>
     <td><?= $item->nama?></td>
     <td><?= $item->alamat?></td>
     <td><?= $item->jenis_kelamin?></td>
     <td><?= $item->agama?></td>
     <td><?= $item->sekolah_asal?></td>
     <td><a href="<?= base_url('view_edit').'/'.$item->id?>" class="btn btn-success">Edit</a>
    <a href="<?= base_url('delete').'/'.$item->id;?>" type="button" class="btn btn-danger">Delete</a></td>
     
    </tr>
    <?php endforeach ?>
   
   </tbody>
  </table>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>