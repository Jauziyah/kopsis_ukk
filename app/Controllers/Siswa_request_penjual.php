<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Request_penjual_model;
use App\Models\Siswa_model;

class Siswa_request_penjual extends BaseController
{
    protected $request_penjual_model;  
    protected $siswa_model;  
    public function __construct()
    {
        $this->request_penjual_model = new Request_penjual_model(); 
        $this->siswa_model = new Siswa_model(); 
    }
    public function request()
    {

        $user_id = auth()->user()->id;

        $siswa_id = $this->siswa_model->where('siswa_id', $user_id)->first();

        $this->request_penjual_model->save([
            'nama' => auth()->user()->nama,
            'pesan' => $this->request->getVar('pesan'),
            'siswa_siswa_id' => $siswa_id
        ]);
        session()->setFlashdata('pesan', 'Request anda terkirim mohon menunggu pesan ');

        return redirect()->to('siswa');
    }
}


?>