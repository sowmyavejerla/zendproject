<?php
class Model_Books extends Zend_Db_Table_Abstract{

    protected $_name = "Books";
    public function saveTransactionLog($input){
        echo "anitha";

//         Zend_Db_Table::setDefaultAdapter($db);
        $db = Zend_Db_Table::getDefaultAdapter();
        // 		$input = $this->_objectToArray($input);
    }
}