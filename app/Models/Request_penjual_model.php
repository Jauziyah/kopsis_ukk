<?php 

namespace App\Models;

use CodeIgniter\Model;

class Request_penjual_model extends Model
{
    protected $table            = 'request_penjual';
    protected $allowedFields    = ['nama', 'pesan', 'siswa_siswa_id'];

    // Dates;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at'; 
    protected $useTimestamps = True;
}


?>