<?php 

namespace App\Controllers;

use CodeIgniter\Shield\Controllers\RegisterController as ShieldRegister;
use CodeIgniter\HTTP\RedirectResponse;
use Codeigniter\I18n\Time;
use App\Models\Mitra_model;
use app\Models\Siswa_model;

class RegisterAdd extends ShieldRegister
{
    protected $mitra_model;
    protected $siswa_model;
    public function __construct()
    {
        $this->mitra_model = new Mitra_model();
        $this->siswa_model = new Siswa_model();
    }
    public function registerAction(): RedirectResponse
    {   
        $response = parent::registerAction();

        if(session()->has('user')){
            $this->siswa_model->save([
            'nama' => $this->request->getVar('username'),
            'kelas' => $this->request->getVar('kelas'),
            'deskripsi' => 'Halo saya adalah Mitra Kopsis',
            'profile_image' => 'profile_default.jpg',
            'saldo' => 0,
        ]);
        }
       return $response;
    }

    public function registerView()
    {
        return parent::registerView();
    }
}

?>