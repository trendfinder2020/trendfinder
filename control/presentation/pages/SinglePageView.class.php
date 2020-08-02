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
class SinglePageView extends TPage
{
    /**
     * Constructor method
     */
    public function __construct()
    {
        parent::__construct();
        
         parent::__construct();
        
        $object = new TElement('iframe');
        $object->src   = 'https://public.tableau.com/views/PainelCovidComrcioIBGE/PesquisaMensaldeComrcio-IBGE?:language=pt&:display_count=y&publish=yes&:origin=viz_share_link:embed=true:showVizHome=no';
        $object->style = "width:761px; height:825px";
        
        parent::add($object);
        
        
     }
}
                                                                                                                                                                                                                                                                                                               <?php
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
class SinglePageView extends TPage
{
    /**
     * Constructor method
     */
    public function __construct()
    {
        parent::__construct();
        
         parent::__construct();
        
        $object = new TElement('iframe');
        $object->src   = 'https://public.tableau.com/views/PainelCovidComrcioIBGE/PesquisaMensaldeComrcio-IBGE?:language=pt&:display_count=y&publish=yes&:origin=viz_share_link:embed=true:showVizHome=no';
        $object->style = "width:761px; height:825px";
        
        parent::add($object);
        
        
     }
}
