<?php

namespace Hotelarstwo\PlaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HotelarstwoPlaceBundle:Default:index.html.twig');
    }
}
