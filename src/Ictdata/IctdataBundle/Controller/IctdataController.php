<?php

namespace Ictdata\IctdataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ictdata\IctdataBundle\Entity\E_enquete;
use Symfony\Component\HttpFoundation\Request;

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
    public function adminspaceAction(Request $requete)
    {
        $enquete = new E_enquete();
        $form = $this->createFormBuilder($enquete)
                    ->add("edate", "date")
                    ->add("eMenagesFixe", "number")
                    ->add("eMenagesMobile", "number")
                    ->add("eIndividusMobile", "number")
                    ->add("eIndividusMobileInternet", "number")
                    ->add("eIndividusSmartphone", "number")
                    ->add("eMenagesOrdinateurBureau", "number")
                    ->add("eMenagesOrdinateurPc", "number")
                    ->add("eMenagesOrdinateurTablette", "number")
                    ->add("eMenagesInternetFixe", "number")
                    ->add("eMenagesInternetMobile", "number")
                    ->add("eMenagesInternetMobileFixe", "number")
                    ->add("eIndividusInternet", "number")
                    ->add("eNbrInternautes", "number")
                    ->add("Add", "submit")
                    ->getForm();
        $form->handleRequest($requete);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($enquete);
            $em->flush();
        }
        return $this->render('IctdataBundle:Default:adminspace.html.twig', array('f' => $form->createView()));
    }
    public function showdataAction()
    {
        $data = $this->getDoctrine()->getManager()->getRepository("IctdataBundle:E_enquete")->findBye_date();

        return $this->render('IctdataBundle:Default:showdata.html.twig', array('data' => $data));
    }
    public function rechercheAction($a, $b)
    {
        $em = $this->getDoctrine()->getManager();
        $resultofsearch = $em->getRepository("IctdataBundle:E_enquete")->recherche($a, $b);

        return $this->render('IctdataBundle:Default:recherche.html.twig', array('resultofsearch' => $resultofsearch));
    }
}
