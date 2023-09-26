<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function index()
    {
        $data= [
            'title' => 'Home | MyApplication',
            'tes' =>['murtaki','shihab','yes']
        ];
        helper('url');
        // return view('pages/home', $data);
        // echo view('pages/home');
        // echo view('layouts/footer');
        return view('pages/home', $data);
    }

    public function about(){
        $data = [
            'title' => 'About | MyApplication',
            'tes' => ['murtaki', 'shihab', 'yes']
        ];
        // echo view('layouts/header', $data);
        // echo view('pages/about');
        // echo view('layouts/footer');
        return view('pages/about', $data);
    }

    public function contact(){
        $data = [
            'title' => 'Contact | MyApplication',
            'tes' => ['murtaki', 'shihab', 'yes']
        ];
        // echo view('layouts/header', $data);
        // echo view('pages/contact');
        // echo view('layouts/footer');
        return view('pages/contact', $data);
    }
}
