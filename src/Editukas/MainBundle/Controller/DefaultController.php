<?php

namespace Editukas\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EditukasMainBundle:Default:index.html.twig');
    }
}
