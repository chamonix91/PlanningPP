<?php

namespace Planning\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlanningMainBundle:Default:index.html.twig');
    }
}
