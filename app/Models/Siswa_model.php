<?php 

namespace App\Models;

use CodeIgniter\Model;

class Siswa_model extends Model
{
    protected $table            = 'siswa';
    protected $allowedFields    = ['nama', 'kelas'];

    // Dates;
    protected $updatedField  = 'updated_at';
}


?>