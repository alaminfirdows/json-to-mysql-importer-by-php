<?php

namespace AlaminFirdows\JSONToMySql;

class Importer
{
    public $data = array();

    public function __construct($data = array())
    {
        isset($data) && is_array($data) ? $this->data = $data : '';
    }

    public function check()
    {
        if (!is_array($this->data) || !count($this->data)) return false;

        return true;
    }

    public function import()
    {
        if ($data = $this->_prepareData()) {
            echo '<pre>';
            var_dump($data);
            die();
        }
    }

    private function _prepareData()
    {
        return [1, 2, 3];
    }
}