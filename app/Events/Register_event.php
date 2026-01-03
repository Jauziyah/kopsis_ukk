<?php

namespace App\Events;

use CodeIgniter\Shield\Entities\User;

class Register_event
{
    public static function onRegister(User $user): void
    {
        $request = service('request');
        
        model('Siswa_model')->save([
            'nama'          => $request->getVar('username'),
            'kelas'         => $request->getVar('kelas'),
            'profile_image' => 'profile_default.jpg',
            'users_id'      => $user->id
        ]);
    }
}