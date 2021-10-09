<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\KaryawanModel; 

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this ->KaryawanModel = new KaryawanModel();  
    }

    public function index()
    {
        $data = ['karyawan'=> $this->KaryawanModel->alldata(),];
        return view(home, $data);
    }
}
