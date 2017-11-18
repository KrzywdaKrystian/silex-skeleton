<?php

namespace App\Controllers;

class BaseController {

    public $view;

    /**
     * BaseController constructor.
     */
    public function __construct($twig)
    {
        $this->view = $twig;
    }


}