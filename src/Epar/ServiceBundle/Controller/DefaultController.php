<?php

namespace Epar\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $securityContext = $this->container->get('security.authorization_checker');

        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->render('EparServiceBundle:Default:index.html.twig');
        } else {
            return $this->render('EparServiceBundle:Default:index_login.html.twig');
        }
    }
}
