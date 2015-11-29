<?php

namespace Epar\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $securityContext = $this->container->get('security.authorization_checker');

        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {

            $form = $this->createFormBuilder()
                ->add('proxy', 'text')
                ->add('port', 'text')
                ->add('save', 'submit', array('label' => 'Submit'))
                ->setAction($this->generateUrl('epar_ajax_ebay_proxy_sett'))
                ->setAttribute('onsubmit','54555')
                ->getForm();

            return $this->render('EparServiceBundle:Default:index.html.twig', array(
                'proxy_form'    => $form->createView()
            ));

        } else {
            return $this->render('EparServiceBundle:Default:index_login.html.twig');
        }
    }

    public function proxySettingsAction(Request $oRequest)
    {
        fwrite(fopen('/tmp/dump', 'a'), print_r(312, 1) . "\n");

        return new Response('hYI PIZDA');
    }
}
