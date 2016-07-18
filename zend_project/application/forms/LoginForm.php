<?php

class Application_Form_LoginForm extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */

        $this->setName('login');
        $username = new Zend_Form_Element_Text('username');
        $username->setLabel('username :')->setRequired();
        $password = new Zend_Form_Element_Text('password');
        $password->setLabel('Password:')->setRequired();
        $submit = new Zend_Form_Element_Submit('login');
        $submit->setLabel('submit');
        $this->addElements(array(
            $username,
            $password,
            $submit
        ));
        $this->setMethod('post');
        $this->setAction(Zend_Controller_Front::getInstance()->getBaseUrl() . '/Authentication/login');
//         echo "hii";
    }
}

