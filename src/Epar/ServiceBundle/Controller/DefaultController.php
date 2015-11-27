<?php

namespace Epar\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EparServiceBundle:Default:index.html.twig');
    }
}
