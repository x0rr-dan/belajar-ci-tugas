<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TransaksiController extends BaseController
{
    public function index()
    {
        return view('v_keranjang');
    }
    //public function detail()
    //{
    //    return view('v_keranjang_detail');
    //}
}
