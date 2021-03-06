<?php
/**
 * SinglePageView
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class PageMapView extends TPage
{
    /**
     * Constructor method
     */
    public function __construct()
    {
        parent::__construct();
        
        // create the HTML Renderer
        $this->html = new THtmlRenderer('app/resources/welcome.html');
        
        $replaces = [];
        $replaces['title']  = 'Dados no Google Earth';
        $replaces['footer'] = 'Veja suas vendas nas últimas 24 horas';
        $replaces['name']   = 'Veja de onde são seus clientes';
        
        // replace the main section variables
        $this->html->enableSection('main', $replaces);
        
        // wrap the page content using vertical box
        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->add($this->html);
        parent::add($vbox);            
    }
}

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <?php
/**
 * SinglePageView
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class PageMapView extends TPage
{
    /**
     * Constructor method
     */
    public function __construct()
    {
        parent::__construct();
        
        // create the HTML Renderer
        $this->html = new THtmlRenderer('app/resources/welcome.html');
        
        $replaces = [];
        $replaces['title']  = 'Dados no Google Earth';
        $replaces['footer'] = 'Veja suas vendas nas últimas 24 horas';
        $replaces['name']   = 'Veja de onde são seus clientes';
        
        // replace the main section variables
        $this->html->enableSection('main', $replaces);
        
        // wrap the page content using vertical box
        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->add($this->html);
        parent::add($vbox);            
    }
}

