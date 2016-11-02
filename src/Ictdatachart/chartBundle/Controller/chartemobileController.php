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
            array("name" => "Ménages équipés d'un fixe",    "data" => $Mfixe, "type" => "column"),
            array("name" => "Ménages équipés d'un fixe",    "data" => $Mfixe, "type" => "spline")
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
    public function chartecomputerAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query1 = $em->createQuery('SELECT e.eDate as date, e.eMenagesequOrdinateur as menagequordinateur,e.eMenagesOrdinateurBureau as Bureau, e.eMenagesOrdinateurPc as Pc, e.eMenagesOrdinateurTablette as Tablette  FROM IctdataBundle:E_enquete e ');
        $resultat1 = $query1->getResult();
        $dates = array();
        $bureau = array();
        $pc = array();
        $tablette = array();
        $menageordinateur = array();
        foreach($resultat1 as $values)
        {
            $ac = date_format($values['date'],"Y");
            array_push($dates, $ac);
            array_push($bureau, $values['Bureau']);
            array_push($pc, $values['Pc']);
            array_push($tablette, $values['Tablette']);
            array_push($menageordinateur, $values['menagequordinateur']);
        }
        // Chart
        $series = array(
            array("name" => "Desktop",    "data" => $bureau, "type" => "column"),
            array("name" => "Laptop",    "data" => $pc, "type" => "column"),
            array("name" => "Tablet",    "data" => $tablette, "type" => "column"),
            array("name" => "Desktop",    "data" => $bureau, "type" => "spline"),
            array("name" => "Laptop",    "data" => $pc, "type" => "spline"),
            array("name" => "Tablet",    "data" => $tablette, "type" => "spline")
        );
        $series0 = array(
            array("name" => "Households equipped with computer",    "data" => $menageordinateur, "type" => "column"),
            array("name" => "Households equipped with computer",    "data" => $menageordinateur, "type" => "spline")
        );
        // chart1
        $ch1 = new Highchart();
        $ch1->chart->renderTo('linechart0');  // The #id of the div where to render the chart
        $ch1->chart->backgroundColor('transparent');
        $ch1->title->text('Households equipped with computer'); //Chart Title
        $ch1->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $ch1->yAxis->title(array('text'  => "indicator %")); //Vertical axis title
        $ch1->xAxis->type('datetime');
        $ch1->chart->zoomType("x");
        $ch1->xAxis->categories($dates);
        $ch1->series($series0);

        // chart2
        $obf = new Highchart();
        $obf->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $obf->chart->backgroundColor('transparent');
        $obf->title->text('Types of computer equipment in households'); //Chart Title
        $obf->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $obf->yAxis->title(array('text'  => "indicator %")); //Vertical axis title
        $obf->xAxis->type('datetime');
        $obf->chart->zoomType("x");
        $obf->xAxis->categories($dates);
        $obf->series($series);
        
        return $this->render('chartBundle:Default:chartecomputer.html.twig', array(
            'chartecomputer0' => $ch1,
            'chartecomputer' => $obf
        ));
    }
    public function charteinternetAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query1 = $em->createQuery('SELECT e.eDate as date, e.eMenagesInternetFixe as Minterfixe,e.eMenagesInternetMobile as Mintermobile, e.eMenagesInternetMobileFixe as fixemobile, e.eIndividusInternet as indivInter, e.eNbrInternautes as internaut  FROM IctdataBundle:E_enquete e ');
        $resultat1 = $query1->getResult();
        $dates = array();
        $Minterfixe = array();
        $Mintermobile = array();
        $fixemobile = array();
        $globe = array();
        $indivInter = array();
        $internaut = array();
        foreach($resultat1 as $values)
        {
            $ac = date_format($values['date'],"Y");
            array_push($dates, $ac);
            array_push($Minterfixe, $values['Minterfixe']);
            array_push($Mintermobile, $values['Mintermobile']);
            array_push($fixemobile, $values['fixemobile']);
            array_push($globe, $values['Minterfixe']+$values['Mintermobile']+$values['fixemobile']);
            array_push($indivInter, $values['indivInter']);
            array_push($internaut, $values['internaut']);
        }
        // Chart
        $series0 = array(
            array("name" => "Fixed Only",    "data" => $Minterfixe, "type" => "column"),
            array("name" => "Mobile internet only",    "data" => $Mintermobile, "type" => "column"),
            array("name" => "Both",    "data" => $fixemobile, "type" => "column"),
            array("name" => "Total",    "data" => $globe, "type" => "column"),
            array("name" => "Fixed Only",    "data" => $Minterfixe, "type" => "spline"),
            array("name" => "Mobile internet only",    "data" => $Mintermobile, "type" => "spline"),
            array("name" => "Both",    "data" => $fixemobile, "type" => "spline"),
            array("name" => "Total",    "data" => $globe, "type" => "spline")
        );
        $series1 = array(
            array("name" => "Individuals who accessed internet",    "data" => $indivInter, "type" => "column"),
            array("name" => "Number of internet users",    "data" => $internaut, "type" => "column"),
            array("name" => "Individuals who accessed internet",    "data" => $indivInter, "type" => "spline"),
            array("name" => "Number of internet users",    "data" => $internaut, "type" => "spline")
        );
        // chart1
        $ch1 = new Highchart();
        $ch1->chart->renderTo('linechart0');  // The #id of the div where to render the chart
        $ch1->chart->backgroundColor('transparent');
        $ch1->title->text('Households equipped with internet access'); //Chart Title
        $ch1->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $ch1->yAxis->title(array('text'  => "indicator %")); //Vertical axis title
        $ch1->xAxis->type('datetime');
        $ch1->chart->zoomType("x");
        $ch1->xAxis->categories($dates);
        $ch1->series($series0);

        // chart2
        $obf = new Highchart();
        $obf->chart->renderTo('linechart1');  // The #id of the div where to render the chart
        $obf->chart->backgroundColor('transparent');
        $obf->title->text('Individuals and number of internet users'); //Chart Title
        $obf->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $obf->yAxis->title(array('text'  => "indicator %")); //Vertical axis title
        $obf->xAxis->type('datetime');
        $obf->chart->zoomType("x");
        $obf->xAxis->categories($dates);
        $obf->series($series1);

        return $this->render('chartBundle:Default:charteinternet.html.twig', array(
            'charteinternet0' => $ch1,
            'charteinternet1' => $obf
        ));
    }
}
