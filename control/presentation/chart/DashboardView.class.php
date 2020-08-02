<?php
/**
 * Chart
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class DashboardView extends TPage
{
    /**
     * Class constructor
     * Creates the page
     */
    function __construct()
    {
        parent::__construct();
        
        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
        
        $div = new TElement('div');
        $div->class = "row";
        
        $indicator1 = new THtmlRenderer('app/resources/info-box.html');
        $indicator2 = new THtmlRenderer('app/resources/info-box.html');
        
        $indicator1->enableSection('main', ['title'     => 'Saldo',
                                           'icon'       => 'money-check-alt',
                                           'background' => 'green',
                                           'value'      => 'R$ 103.850' ] );
        
        $indicator2->enableSection('main', ['title'      => 'Receita E-commerce (02/08)',
                                            'icon'       => 'hand-holding-usd',
                                            'background' => 'orange',
                                            'value'      => 'R$ 58.530' ] );
                                            
        $div->add( $i1 = TElement::tag('div', $indicator1) );
        $div->add( $i2 = TElement::tag('div', $indicator2) );
        
        $div->add( $g1 = new BarChartView(false) );
        $div->add( $g2 = new PieChartView(false) );
        
        //$div->add( $g3 = new LineChartView(false) );
        //$div->add( $g4 = new ColumnChartView(false) );
 
        
        $i<?php
/**
 * Chart
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class DashboardView extends TPage
{
    /**
     * Class constructor
     * Creates the page
     */
    function __construct()
    {
        parent::__construct();
        
        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
        
        $div = new TElement('div');
        $div->class = "row";
        
        $indicator1 = new THtmlRenderer('app/resources/info-box.html');
        $indicator2 = new THtmlRenderer('app/resources/info-box.html');
        
        $indicator1->enableSection('main', ['title'     => 'Saldo',
                                           'icon'       => 'money-check-alt',
                                           'background' => 'green',
                                           'value'      => 'R$ 103.850' ] );
        
        $indicator2->enableSection('main', ['title'      => 'Receita E-commerce (02/08)',
                                            'icon'       => 'hand-holding-usd',
                                            'background' => 'orange',
                                            'value'      => 'R$ 58.530' ] );
                                            
        $div->add( $i1 = TElement::tag('div', $indicator1) );
        $div->add( $i2 = TElement::tag('div', $indicator2) );
        
        $div->add( $g1 = new BarChartView(false) );
        $div->add( $g2 = new PieChartView(false) );
        
        //$div->add( $g3 = new LineChartView(false) );
        //$div->add( $g4 = new ColumnChartView(false) );
 
        
        $i1->class = 'col-sm-6';
        $i2->class = 'col-sm-6';
        $g1->class = 'col-sm-6';
        $g2->class = 'col-sm-6';
        //$g3->class = 'col-sm-6';
        //$g4->class = 'col-sm-6';
        
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->add($div);
        
        parent::add($vbox);
    }
}


