<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Siswa_model;

class Siswa_display_page extends BaseController
{
    protected $siswa_model;
    protected $db;
    public function __construct()
    {
        $this->siswa_model = new Siswa_model();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $user_id = auth()->user()->id;
        $siswa = $this->siswa_model->where('users_id', $user_id)->first();

        $siswa_id = $siswa['siswa_id'];

        $request = $this->db->table('request_penjual')->where('siswa_siswa_id', $siswa_id)->get()->getRowArray();

        $request_status = 'no_request';

        if ($request['status'] == 'approved') {
            $request_status = 'approved';
        } elseif ($request['status'] == 'rejected') {
            $request_status = 'rejected';
        } else {
            $request_status = 'pending';
        }

        $data = [
            'request_status' => $request_status
        ];

        return view('siswa/homepage', $data);
    }
}
