<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        return view('Helloworld/index');
    }
}
