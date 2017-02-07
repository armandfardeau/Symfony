<?php

namespace Azae\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AzaeCoreBundle:Default:index.html.twig');
    }
}
