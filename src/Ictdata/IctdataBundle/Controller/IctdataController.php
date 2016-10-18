<?php

namespace Ictdata\IctdataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IctdataController extends Controller
{
    public function indexAction()
    {

        return $this->render('IctdataBundle:Default:index.html.twig', array());
    }
    public function grapheMobileAction()
    {

        return $this->render('IctdataBundle:Default:grapheMobile.html.twig', array());
    }
    public function grapheFixeAction()
    {

        return $this->render('IctdataBundle:Default:grapheFixe.html.twig', array());
    }
}
