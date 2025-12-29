<?php 

namespace App\Models;

use CodeIgniter\Model;

class Mitra_model extends Model
{
    protected $table            = 'mitra_kopsis';
    protected $allowedFields    = ['nama','kelas','deskripsi','profile_image','saldo'];
    protected $useTimestamps = true;

}


?>