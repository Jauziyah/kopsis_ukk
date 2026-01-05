<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Request_penjual_model;

class Admin_penjual_approve extends BaseController
{
    protected $request_penjual;
    public function __construct()
    {
        $this->request_penjual = new Request_penjual_model();
    }
    public function accept($id)
    {
        $request =$this->request_penjual->find($id);

        $this->request_penjual->update(
            $id,
            ['status' => 'accepted']
        );

        $users = auth()->getProvider();

        $user = $users->findById($request['user_id']);
        $user->addGroup('penjual');

        return redirect()->back()->with('success', 'Request accepted! User is now a Penjual.');

    }

    public function reject($id)
    {
        $this->request_penjual->update(
            $id,
            ['status' => 'rejected']
        );

        return redirect()->back()->with('success', 'Request Rejected! Fuck that user anyway.');
        
    }
}


?>