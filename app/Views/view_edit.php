<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Edit calon Siswa</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
 <h1>Tambah Siswa</h1>
 <div class="container">
<form action="<?=base_url('save_edit');?>" method="POST">
    
    <input type="hidden" class="form-control" name=id id="id" aria-describedby="emailHelp" value="<?=$data->id?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" name=nama id="nama" aria-describedby="emailHelp" value="<?=$data->nama?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name=alamat id="alamat" aria-describedby="emailHelp" value="<?=$data->alamat?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" name=jenis_kelamin id="jenis_kelamin"aria-describedby="emailHelp" value="<?=$data->jenis_kelamin?>">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Agama</label>
    <input type="text" class="form-control" name=agama id="agama" aria-describedby="emailHelp" value="<?=$data->agama?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sekolah Asal</label>
    <input type="text" class="form-control" name=sekolah_asal id="sekolah_asal" aria-describedby="emailHelp" value="<?=$data->sekolah_asal?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
   
   </tbody>
  </table>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>