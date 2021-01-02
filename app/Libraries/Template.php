<?php

namespace App\Libraries;

class Template {
    public static function render($param) {
        return 'Hello '.ucwords($param);
    }
}