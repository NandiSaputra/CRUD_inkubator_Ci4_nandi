<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
 protected $table = 'calon_siswa';
 protected $returnType     = 'object';
 protected $allowedFields = ['nama', 'alamat','jenis_kelamin','jenis_kelamin','agama','sekolah_asal'];

}
