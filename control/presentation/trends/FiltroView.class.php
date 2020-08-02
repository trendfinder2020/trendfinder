<?php
/**
 * FormStaticSelectionView
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class FiltroView extends TPage
{
    private $form;
    
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
        
        // create the form
        $this->form = new BootstrapFormBuilder;
        $this->form->setFormTitle('Parâmetros de busca');
        $this->form->generateAria();
        
        // create the form fields
<?php
/**
 * FormStaticSelectionView
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class FiltroView extends TPage
{
    private $form;
    
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
        
        // create the form
        $this->form = new BootstrapFormBuilder;
        $this->form->setFormTitle('Parâmetros de busca');
        $this->form->generateAria();
        
        // create the form fields
        $autocomp = new TEntry('autocomplete');
  
        
        //Itens do combo 
        $items = ['a'=>'Shampoo', 'b'=>'Condicionador', 'c'=>'Finalizador', 'd'=>'Base', 'b'=>'Corretivo', 'c'=>'Perfume'];
        $autocomp->setCompletion( array_values( $items ));
       
        
        // adjust grid layout columns
        $this->form->setColumnClasses(2, ['col-sm-4', 'col-sm-8']);
        $this->form->addFields( [new TLabel('Termo de busca:')], [$autocomp] );
        
        $object = new TElement('iframe');
        $object->src   = '//www.adianti.com.br/framework_files/adianti_framework.pdf';
        $object->type  = 'application/pdf';
        $object->style = "width: 100%; height:600px";
        
          
       
        $div2 = new TElement('div');
        $div2->style = 'width:90%;float:left';
        $div2->add( $object );
        
        
        // validations
        $autocomp->addValidation('Termo de busca', new TRequiredValidator);
                
        // wrap the page content using vertical box
        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->add($this->form);
        parent::add($vbox);
    }
    
    /**
     * Send data
     */
    public function onSend($param)
    {
        $data = $this->form->getData(); // optional parameter: active record class
        
        // put the data back to the form
        $this->form->setData($data);
        
        // creates a string with the form element's values
        $message =  'Autocomplete: ' . $data->autocomplete . '<br>';
        $message.=  'Combo : ' . $data->combo . '<br>';
        
        //$title = $data->autocomplete 
        // Load another page
        //AdiantiCoreApplication::loadPage('/resource/welcome.html', , (array) $title);
        
        // show the message
        new TMessage('info', $message);
    }
}
