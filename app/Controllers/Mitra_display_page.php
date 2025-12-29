<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class Mitra_display_page extends BaseController
{
    public function index()
    {
        return view('mitra_kopsis/product');
    }
}


?>