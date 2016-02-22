<?php

namespace Hotelarstwo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HotelarstwoUserBundle:Default:index.html.twig');
    }
}
