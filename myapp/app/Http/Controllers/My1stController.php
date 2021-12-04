<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class My1stController extends Controller
{
    public function index() {
        return <<<EOF
<html>
<body>
My1stController
</body>
</html>
EOF;
    }
}
