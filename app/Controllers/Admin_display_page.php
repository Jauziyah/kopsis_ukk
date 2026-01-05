<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Request_penjual_model;

class Admin_display_page extends BaseController
{
    protected $request_penjual;
    protected $db;
    public function __construct()
    {
        $this->request_penjual = new Request_penjual_model();
    }
    public function index()
    {

        $request_penjual_pending = $this->request_penjual->where('status', 'pending')->findAll();

        $data = [
            'request_penjual_pending' => $request_penjual_pending
        ];
        return view('admin/dashboard', $data);
        dd($data);
    }
}


?>