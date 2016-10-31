<?php

namespace Ictdatachart\chartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Ob\HighchartsBundle\Highcharts\Highstock;
use Zend\Json\Expr;
use Ictdata\IctdataBundle\Entity\E_enquete;
class ChartemobileController extends Controller
{
    public function chartemobileAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query1 = $em->createQuery('SELECT e.eDate as date, e.eMenagesMobile as Mmobile, e.eIndividusMobile as Imobile, e.eIndividusMobileInternet as Iimobile, e.eIndividusSmartphone as smartphone   FROM IctdataBundle:E_enquete e ');
        $resultat1 = $query1->getResult();
        $dates = array();
        $Mmobile = array();
        $Imobile = array();
        $Iimobile = array();
        $smartphone = array();
        foreach($resultat1 as $values)
        {
            $ac = date_format($values['date'],"Y");
            array_push($dates, $ac);
            array_push($Mmobile, $values['Mmobile']);
            array_push($Imobile, $values['Imobile']);
            array_push($Iimobile, $values['Iimobile']);
            array_push($smartphone, $values['smartphone']);

        }
        // Chart
        $series = array(
            array("name" => "Ménages équipés d'un mobile",    "data" => $Mmobile),
            array("name" => "Individus équipés en mobile",    "data" => $Imobile ),
            array("name" => "Individus utilisant internet mobile / équipés mobile",    "data" => $Iimobile),
            array("name" => "Ménages équipés en smartphone / équipés mobile",    "data" => $smartphone)
        );
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->chart->type('spline');
        $ob->chart->backgroundColor('transparent');
        $ob->title->text('Mobile'); //Chart Title
        $ob->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $ob->yAxis->title(array('text'  => "indicator %")); //Vertical axis title
        $ob->xAxis->type('datetime');
        $ob->chart->zoomType("x");
        $ob->xAxis->categories($dates);
        $ob->series($series);

        //Chart type  column

        $series_column = array(
            array("name" => "Ménages équipés d'un mobile",    "data" => $Mmobile, "type" => "column"),
            array("name" => "Individus équipés en mobile",    "data" => $Imobile, "type" => "column"),
            array("name" => "Individus utilisant internet mobile / équipés mobile",    "data" => $Iimobile, "type" => "column"),
            array("name" => "Ménages équipés en smartphone / équipés mobile",    "data" => $smartphone, "type" => "column")
        );
        $oc = new Highchart();
        $oc->chart->renderTo('linechart_column');  // The #id of the div where to render the chart
        $oc->chart->backgroundColor('transparent');
        $oc->title->text('Mobile'); //Chart Title
        $oc->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $oc->yAxis->title(array('text'  => "indicator %")); //Vertical axis title
        $oc->xAxis->type('datetime');
        $oc->chart->zoomType("x");
        $oc->xAxis->categories($dates);
        $oc->series($series_column);

        return $this->render('chartBundle:Default:chartemobile.html.twig', array(
            'chartemobile' => $ob,
            'chartemobile_column' => $oc,
        ));
    }
    public function chartefixeAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query1 = $em->createQuery('SELECT e.eDate as date, e.eMenagesFixe as Mfixe  FROM IctdataBundle:E_enquete e ');
        $resultat1 = $query1->getResult();
        $dates = array();
        $Mfixe = array();
        foreach($resultat1 as $values)
        {
            $ac = date_format($values['date'],"Y");
            array_push($dates, $ac);
            array_push($Mfixe, $values['Mfixe']);

        }
        // Chart
        $series = array(
            array("name" => "Ménages équipés d'un fixe",    "data" => $Mfixe, "type" => "spline"),
            array("name" => "Ménages équipés d'un fixe",    "data" => $Mfixe, "type" => "column")
        );
        $obf = new Highchart();
        $obf->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $obf->chart->backgroundColor('transparent');
        $obf->title->text('Fixe'); //Chart Title
        $obf->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $obf->yAxis->title(array('text'  => "indicator %")); //Vertical axis title
        $obf->xAxis->type('datetime');
        $obf->chart->zoomType("x");
        $obf->xAxis->categories($dates);
        $obf->series($series);
        
        return $this->render('chartBundle:Default:chartefixe.html.twig', array(
            'chartefixe' => $obf
        ));
    }
}
