<?php

namespace Ictdata\IctdataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ictdata\IctdataBundle\Entity\E_enquete;
use Ictdata\IctdataBundle\Entity\D_parc_abonne;
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
    public function formenqueteAction(Request $requete)
    {
        $enquete = new E_enquete();
        $form = $this->createFormBuilder($enquete)
                    ->add("edate", "date")
                    ->add("eMenagesFixe", "number")
                    ->add("eMenagesMobile", "number")
                    ->add("eIndividusMobile", "number")
                    ->add("eIndividusMobileInternet", "number")
                    ->add("eIndividusSmartphone", "number")
                    ->add("eMenagesequOrdinateur", "number")
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
    public function forme_d_parcabonnAction(Request $requete)
    {
        $parc_abonn = new D_parc_abonne();
        $form = $this->createFormBuilder($parc_abonn)
            ->add("pDate", "date")
            ->add("pMobilePostPaye", "number")
            ->add("pMobilePrePaye", "number")
            ->add("pFixeGlobal", "number")
            ->add("pFixeMobiliteRestreinte", "number")
            ->add("pFixeResidentiel", "number")
            ->add("pFixeProfessionnel", "number")
            ->add("pPubliphoneLignes", "number")
            ->add("pInternetGlobaleAdsl", "number")
            ->add("pInternetGlobaleMobile", "number")
            ->add("pInternetGlobaleAutre", "number")
            ->add("pInternetBasdebit", "number")
            ->add("pInternet", "number")
            ->add("pInternetClassique", "number")
            ->add("pInternetForfait", "number")
            ->add("pInternetAdsl", "number")
            ->add("pInternetAdsldebit128k", "number")
            ->add("pInternetAdsldebit153k", "number")
            ->add("pInternetAdsldebit256k", "number")
            ->add("pInternetAdsldebit512k", "number")
            ->add("pInternetAdsldebit1024k", "number")
            ->add("pInternetAdsldebit2M", "number")
            ->add("pInternetAdsldebit4M", "number")
            ->add("pInternetAdsldebit8M", "number")
            ->add("pInternetAdsldebit12M", "number")
            ->add("pInternetAdsldebit20M", "number")
            ->add("pllInternet", "number")
            ->add("pInternet3G", "number")
            ->add("pInternet3GData", "number")
            ->add("pInternet3GDataVoi", "number")
            ->add("pNomDomainMa", "number")
            ->add("pRepartMa", "number")
            ->add("pRepartAutre", "number")
            ->add("pNewEnregistTrimestre", "number")
            ->add("pNomDomainMa", "number")
            ->add("pRepartMa", "number")
            ->add("pRepartAutre", "number")
            ->add("Add", "submit")
            ->getForm();
        $form->handleRequest($requete);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($parc_abonn);
            $em->flush();
        }
        return $this->render('IctdataBundle:Default:form_pabonn.html.twig', array('f_parcabonn' => $form->createView()));
    }
}
