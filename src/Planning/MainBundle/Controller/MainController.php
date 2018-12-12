<?php

namespace Planning\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('@PlanningMain/Template/index.html.twig');
    }
}
