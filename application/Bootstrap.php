<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initAutoload()
    {
        $modelLoader = new Zend_Application_Module_Autoloader(array(
            "namespace" => "Application",
            "basePath" => APPLICATION_PATH
        ));

        return $modelLoader;
    }

    protected function _initConfig()
    {

        $config = new Zend_Config($this->getOptions());
//         print_r($this->getOptions());
        Zend_Registry::set('ApplicationConfig', $config);
    }

    protected function _initDb()
    {

        $config = Zend_Registry::get('ApplicationConfig');
        $db = Zend_Db::factory("PDO_MYSQL", array(
                'host' => "localhost",
                'username' =>"root",
                'password' => "root",
                'dbname' => "zfproject"
        ));
        Zend_Db_Table_Abstract::setDefaultAdapter($db);
        Zend_Registry::set('db', $db);
    }
}

