<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Shield\Controllers\LoginController as ShieldLogin ;

class LoginAdd extends ShieldLogin
{
    public function index():RedirectResponse
    {
        $response = parent::loginAction();
        if(auth()->loggedIn()){
            $user = auth()->user();

            if ($user->inGroup('mitra_kopsis')){
                return redirect()->to('mitra_kopsis');
            } elseif ($user->inGroup('/admin')){
                 return redirect()->to(uri: '/admin');
            } elseif ($user->inGroup('siswa')){
                 return redirect()->to('/siswa');
        }
        else {
            return redirect()->to('/');
        }
        
    }

    return $response;
}
}

?>