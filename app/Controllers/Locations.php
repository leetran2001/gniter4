<?php


namespace App\Controllers;
use App\Libraries\Template;

class Locations extends BaseController {
    public function index() {
        $template = new Template();
        $renderedStuff = $template->render('World!');
        echo $renderedStuff;
    }
}
