<?php 

namespace App\Models;

use CodeIgniter\Model;

class Siswa_model extends Model
{
    protected $table            = 'siswa';
    protected $allowedFields    = ['nama','kelas','profile_image', 'users_id'];

    protected $primaryKey = 'siswa_id';

    // Dates;
    protected $updatedField  = 'updated_at';
    protected $createdField = 'created_at';
    protected $useTimestamps = True;

    // public function get_siswa_id()
    // {
    //     $siswa = $this->where('siswa_id', auth()->id())->first();

    //     return $siswa ? $siswa['id'] : null;
    // }

    // public function get_siswa_data()
    // {
    //     return  $this->where('siswa_id', auth()->id())->first();
    // }

}


?>