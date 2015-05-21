<?php
namespace BookList\Form;

use Zend\Form\Form;

class BookForm extends Form
{
    public function __construct($name = null) {
        parent::__construct('book');
        
        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'title',
            'type' => 'text',
            'options' => array(
                'label' =>'Title',
            )
        ));
        $this->add(array(
            'name' => 'author',
            'type' => 'text',
            'options' => array(
                'label' =>'Author',
            )
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'button text',
                'id' => 'submitbutton'
            )
        ));
    }
}