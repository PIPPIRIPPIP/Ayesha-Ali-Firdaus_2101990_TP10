<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'BQ | Home'
        ];
        return view('pages/home', $data);
    }

    public function job()
    {
        $data = [
            'tittle' => 'BQ | Job'
        ];
        return view('pages/job', $data);
    }
    public function admin()
    {
        $data = [
            'tittle' => 'BQ | Admin'
        ];
        return view('pages/admin', $data);
    }
}