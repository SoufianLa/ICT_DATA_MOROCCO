<?php

namespace Ictdatachart\chartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Ob\HighchartsBundle\Highcharts\Highstock;
use Zend\Json\Expr;
use Ictdata\IctdataBundle\Entity\E_enquete;
class DefaultController extends Controller
{
    public function chartAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT e.eMenagesFixe as Fixe, e.eDate as date FROM IctdataBundle:E_enquete e ');
        $query1 = $em->createQuery('SELECT e.eMenagesMobile as Mmobile, e.eIndividusMobile as Imobile, e.eIndividusMobileInternet as Iimobile, e.eIndividusSmartphone as smartphone   FROM IctdataBundle:E_enquete e ');
        $resultat = $query->getResult();
        $resultat1 = $query1->getResult();
        $data = array();
        $dates = array();
        $Mmobile = array();
        $Imobile = array();
        $Iimobile = array();
        $smartphone = array();
        foreach($resultat as $values)
        {
            $ac = date_format($values['date'],"Y");
            $a = array($ac, $values['Fixe']);
            array_push($data, $a);
            array_push($dates, $ac);

        }
        foreach($resultat1 as $values)
        {
            array_push($Mmobile, $values['Mmobile']);
            array_push($Imobile, $values['Imobile']);
            array_push($Iimobile, $values['Iimobile']);
            array_push($smartphone, $values['smartphone']);

        }
        // Chart
        $series = array(
            array("name" => "Ménages équipés d'un mobile",    "data" => $Mmobile),
            array("name" => "Ménages équipés en mobile",    "data" => $Imobile),
            //array("name" => "Individus utilisant internet mobile / équipés mobile",    "data" => $Iimobile),
            //array("name" => "Ménages équipés en smartphone / équipés mobile",    "data" => $smartphone)
        );
        /*$dates = array(
            "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06", "28/06", "29/06","30/06","31/06", "01/07", "02/07","03/07"
        );*/
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->chart->backgroundColor('transparent');
        //$ob->chart->type('bar');
        $ob->title->text('Indicators'); //Chart Title
        $ob->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $ob->yAxis->title(array('text'  => "indicator")); //Vertical axis title
        $ob->xAxis->type('datetime');
        $ob->chart->zoomType("x");
        $ob->xAxis->categories($dates);
        $ob->series($series);

        //Pie chart with legend

        $oc = new Highchart();
        $oc->chart->renderTo('piechart');
        $oc->title->text('Browser market shares at a specific website in 2010');
        $oc->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));

        /*var_dump($data);
        $data = array(
            array('Firefox', 45.0),
            array('IE', 26.8),
            array('Chrome', 12.8),
            array('Safari', 8.5),
            array('Opera', 6.2),
            array('Others', 0.7),
        );*/
        $oc->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

        //
        // new chart
        $series = array(
            array(
                'name'  => 'Rainfall',
                'type'  => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data'  => array(49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4),
            ),
            array(
                'name'  => 'Temperature',
                'type'  => 'spline',
                'color' => '#AA4643',
                'data'  => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),
            ),
        );
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style'     => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text'  => 'Temperature',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " mm" }'),
                    'style'     => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text'  => 'Rainfall',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

        $od = new Highchart();
        $od->chart->renderTo('cont'); // The #id of the div where to render the chart
        $od->chart->type('column');
        $od->title->text('Average Monthly Weather Data for Tokyo');
        $od->xAxis->categories($categories);
        $od->yAxis($yData);
        $od->legend->enabled(false);
        $formatter = new Expr('function () {
                 var unit = {
                     "Rainfall": "mm",
                     "Temperature": "degrees C"
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
        $od->tooltip->formatter($formatter);
        $od->series($series);

        // new chart 2

        $of = new Highchart();
        $of->chart->renderTo('con');
        $of->chart->type('pie');
        $of->title->text('Browser market shares. November, 2013.');
        $of->plotOptions->series(
            array(
                'dataLabels' => array(
                    'enabled' => true,
                    'format' => '{point.name}: {point.y:.1f}%'
                )
            )
        );

        $of->tooltip->headerFormat('<span style="font-size:11px">{series.name}</span><br>');
        $of->tooltip->pointFormat('<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>');

        $data = array(
            array(
                'name' => 'Chrome',
                'y' => 18.73,
                'drilldown' => 'Chrome',
                'visible' => true
            ),
            array(
                'name' => 'Microsoft Internet Explorer',
                'y' => 53.61,
                'drilldown' => 'Microsoft Internet Explorer',
                'visible' => true
            ),
            array('Firefox', 45.0),
            array('Opera', 1.5)
        );
        $of->series(
            array(
                array(
                    'name' => 'Browser share',
                    'colorByPoint' => true,
                    'data' => $data
                )
            )
        );

        $drilldown = array(
            array(
                'name' => 'Microsoft Internet Explorer',
                'id' => 'Microsoft Internet Explorer',
                'data' => array(
                    array("v8.0", 26.61),
                    array("v9.0", 16.96),
                    array("v6.0", 6.4),
                    array("v7.0", 3.55),
                    array("v8.0", 0.09)
                )
            ),
            array(
                'name' => 'Chrome',
                'id' => 'Chrome',
                'data' => array(
                    array("v19.0", 7.73),
                    array("v17.0", 1.13),
                    array("v16.0", 0.45),
                    array("v18.0", 0.26)
                )
            ),
        );
        $of->drilldown->series($drilldown);



        // unifié
        $seriess = array(
            array(
                "name" => "Bénéfices total",
                "data" => array(9.1, 10.3, 6.5, 12.2, 5.2, 9.1, 11.1),
                "type" => "column"
            ),
            array(
                "name" => "Bénéfices pour la France",
                "data" => array(6.6, 8.2, 0.76, 4.6, 2.1, 4.1, 3.9),
                "type" => "column"
            ),
            array(
                "name" => "Total des ventes",
                "data" => array(683, 756, 543, 1208, 617, 990, 1001),
                "type" => "spline",
                "yAxis" => 1,
            ),
            array(
                "name" => "Ventes en France",
                "data" => array(467, 321, 56, 698, 134, 344, 452),
                "type" => "spline",
                "yAxis" => 1,
            ),
            array(
                "type" => "pie",
                "name" => "Pourcentage des ventes totales",
                "data" => array(
                    array('Guinness', 32.0),
                    array('Westvleteren', 26.8),
                    array('Alchemist Heady Topper', 13.0),
                    array('La Thou', 12.8),
                    array('Russian River Pliny the Elder', 8.5),
                    array('Founders KBS', 6.2),
                    array('Rochefort Trappistes 10', 0.7)
                ),
                "center" => array(50, 50),
                "size" => 100,
                "showInLegend" => false,
                "dataLabels" => array(
                    "enabled" => false
                )
            )
        );

        $yData = array(
            array(
                'title' => array(
                    'text'  => "Bénéfices (millions d'euros)",
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'title' => array(
                    'text'  => "Ventes (milliers d'unités)",
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );

        $datesk = array(
            "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
        );

        $ok = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ok->chart->renderTo('overviewchart');
        $ok->title->text('Ventes au cours de la semaine');

        $ok->yAxis->title(array('text'  => "Vente en milliers"));
        $ok->yAxis($yData);

        $ok->xAxis->title(array('text'  => "Date du jours"));
        $ok->xAxis->categories($datesk);

        $ok->series($seriess);



        return $this->render('chartBundle:Default:chart.html.twig', array(
            'chart' => $ob,
            'pie'   => $oc,
            'newchart' => $od,
            'newchart2' => $of,
            'uni' => $ok
        ));
    }
}
