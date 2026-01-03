<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class Siswa_display_page extends BaseController
{
    public function index()
    {
        return view('siswa/homepage');
    }
}
?>