<?php

class Application_Model_DbTable_Books extends Zend_Db_Table_Abstract
{

    protected $_name = "Books";

    public function saveTransactionLog($input)
    {
        $db = Zend_Registry::get('db');

        // $select = $db->select()->from($this->_name);
        // print_r($db->fetchAll($select));
    }
}