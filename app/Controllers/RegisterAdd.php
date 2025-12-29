<?php 

namespace App\Controllers;

use CodeIgniter\Shield\Controllers\RegisterController as ShieldRegister;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\I18n\Time;

use App\Models\Mitra_model;

class RegisterAdd extends ShieldRegister
{
    protected $mitra_model;
    public function __construct()
    {
        $this->mitra_model = new Mitra_model();
    }
    public function registerAction(): RedirectResponse
    {   
        $response = parent::registerAction();

        if(session()->has('user')){
            $this->mitra_model->save([
            'nama' => $this->request->getVar('username'),
            'kelas' => $this->request->getVar('kelas'),
            'deskripsi' => 'Halo saya adalah mitra kopsis',
            'profile_image' => 'profile_default.jpg',
            'saldo' => 0,
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ]);
        }
       return $response;
    }
}

?>