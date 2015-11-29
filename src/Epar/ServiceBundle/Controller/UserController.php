<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 28.11.15
 * Time: 23:55
 */

namespace Epar\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Epar\ServiceBundle\Entity\EbayProfiles;


class UserController extends Controller
{
    public function ebayLoginAction(Request $oRequest)
    {
        $oEbayProfiles = new EbayProfiles();

        fwrite(fopen('/tmp/dump', 'w'), print_r($oRequest->request->all('ebay_email'), 1));

        $serializedEntity = $this->container->get('serializer')->serialize(array('name' => 'ebayLoginAction'), 'json');

        return new Response($serializedEntity);
    }
}