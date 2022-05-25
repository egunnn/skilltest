<?php

namespace App\Controllers;

use CodeIgniter\Model;
use App\Models\HomeModel;

class Home extends BaseController
{
    function __construct()
    {
        $this->HM = new HomeModel();
    }

    public function index()
    {
        $data['webtitle'] = "LCI | Home";
        //dd($data);
        return view('pages/home', $data);
    }
    public function search()
    {
        $data['webtitle'] = "LCI | Cari";
        $data['data'] = $this->HM->findAll();
        return view('pages/search', $data);
    }
}
