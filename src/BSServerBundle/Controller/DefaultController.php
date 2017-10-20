<?php

namespace BSServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BSServerBundle:Default:index.html.twig');
    }
}
