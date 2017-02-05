<?php

namespace Ictdatachart\chartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;
use Ictdata\IctdataBundle\Entity\D_parc_abonne;
use Ictdata\IctdataBundle\Entity\E_enquete;
class DnsController extends Controller
{
    public function chartcreate($dates, $series, $rend){
        $ob = new Highchart();
        $ob->chart->renderTo($rend);  // The #id of the div where to render the chart
        $ob->chart->type('pie');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));

        return $ob;
    }
    public function dnsAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query1 = $em->createQuery('SELECT d.pDate as date FROM IctdataBundle:D_parc_abonne d ');
        $resultat1 = $query1->getResult();
        $dates_format = array();
        $date_b = array();
        foreach($resultat1 as $values)
        {
            $ac = date_format($values['date'],"Y");
            echo($ac);
            array_push($dates_format, $ac);
            array_push($date_b, $values['date']);

        }
        //dump($date_b);
        $queries = array();
        $repartma = array();
        $repartautre = array();
        $a = array('repartitionma');
        $b = array('repartitionautre');
        $g = array();
        foreach ($date_b as $res){
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery('SELECT d.pRepartMa as repartitionma, d.pRepartAutre as repartitionautre FROM IctdataBundle:D_parc_abonne d  where d.pDate = :ddate')->setParameter('ddate',$res);
            $resu = $query->getResult();
            //dump($resu);
            foreach($resu as $val){
                array_push($a, $val['repartitionma']);
                array_push($b, $val['repartitionautre']);
                }
            array_push($g, $a);
            dump($g);
            die();
            array_push($queries, $resu);
                //array_push($repartma, $val['repartitionma']);
                //array_push($repartautre, $val['repartitionautre']);
            //array_push($a, $resu['repartitionma']);
            //array_push($b, $resu['repartitionautre']);


           $aa = array(
                array('Firefox', 45.0),
                array('IE', 45.0),
               );
            //array_push($repartma, $resu['repartitionma']);
            //array_push($repartautre, $resu['repartitionautre']);
            //echo($query["repartitionma"]);
        }

        // Chart

        return $this->render('chartBundle:Default:dns.html.twig', array(

        ));
    }
}
