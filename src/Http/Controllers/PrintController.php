<?php

namespace Astergo\StackfoodPrintnode\Http\Controllers;

use App\Http\Controllers\Controller;


class PrintController extends Controller
{

    private $path = "StackfoodPrintnode";

    public function configPage()
    {
        return view("$this->path::config");
    }

}
