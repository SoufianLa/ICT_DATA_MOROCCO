<?php

namespace Ictdatachart\chartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Ob\HighchartsBundle\Highcharts\Highstock;
class DefaultController extends Controller
{
    public function chartAction()
    {
        // Chart
        $series = array(
            array("name" => "Ménages fixe",    "data" => array(1,2,4,5,6,3,8,10,11,5,14,24,47,12))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Indicators'); //Chart Title
        $ob->xAxis->title(array('text'  => "Date")); //Horizontal axis title
        $ob->yAxis->title(array('text'  => "indicator")); //Vertical axis title
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
        $data = array(
            array('Firefox', 45.0),
            array('IE', 26.8),
            array('Chrome', 12.8),
            array('Safari', 8.5),
            array('Opera', 6.2),
            array('Others', 0.7),
        );
        $oc->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

        //

        return $this->render('chartBundle:Default:chart.html.twig', array(
            'chart' => $ob,
            'pie'   => $oc
        ));
    }
}
