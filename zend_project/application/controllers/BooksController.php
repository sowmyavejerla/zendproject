<?php

class BooksController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function listAction()
    {
        $myBooks = new Application_Model_DbTable_Books();
        $myBooks->saveTransactionLog(array(
            "kjhs" => "dfgdg"
        ));
        $this->view->albums = $myBooks->fetchAll();
    }
}



