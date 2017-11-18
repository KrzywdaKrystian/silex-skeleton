<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

class IndexController extends BaseController {

    public function indexAction() {
        return $this->view->render('index.html.twig', array());
    }

    public function pageAction() {
        return new Response();
    }

}