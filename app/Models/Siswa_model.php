<?php 

namespace App\Models;

use CodeIgniter\Model;

class Siswa_model extends Model
{
    protected $table            = 'siswa';
    protected $allowedFields    = ['nama','kelas','deskripsi','profile_image','saldo'];

    // Dates;
    protected $updatedField  = 'updated_at';
    protected $createdField = 'created_at';
    protected $useTimestamps = True;
}


?>