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
            array("name" => "Ménages équipés en mobile",    "data" => $Imobile ),
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

        return $this->render('chartBundle:Default:chartemobile.html.twig', array(
            'chartemobile' => $ob,
        ));
    }
}
