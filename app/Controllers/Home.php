<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        return view('welcome_message',$datos);
    }
}
