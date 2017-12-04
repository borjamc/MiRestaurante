<?php

namespace MirestauranteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MirestauranteBundle\Entity\Restaurante;
use MirestauranteBundle\Form\RestauranteType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MirestauranteBundle:Default:index.html.twig');
    }
}
