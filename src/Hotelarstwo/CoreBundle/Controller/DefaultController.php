<?php

namespace Hotelarstwo\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HotelarstwoCoreBundle:Default:index.html.twig');
    }
}
