<?php namespace App\Controllers;

class Blog extends \CodeIgniter\Controller
{
        public function index()
        {
        	   //$data = [ "page_title" => "Larry's Blog"];
        	    //echo view("header");
        	    //echo view("menu");
        	    //echo view("content", $data);
                echo view("Larry-apps/View/index");
        }
}