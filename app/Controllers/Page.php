<?php

namespace App\Controllers;

class Page extends BaseController
{

    public function home(){

        $data = [
            'title'=> 'Home | Pemrograman Web2'
        ];
        echo view ('layout/header', $data);
        echo view ('page/home');
        echo view ('layout/footer');
    }
    public function about()
    {
        $data = [
            'title'=> 'About Me'
        ];
        echo view ('layout/header', $data);
        echo view ('page/about');
        echo view ('layout/footer');
    }
    public function contact()
    {
        echo "ini halaman contact";
    }
    public function faqs()
    {
        echo "ini halaman FAQ";
    }
}