<?php

namespace AlaminFirdows\JSONToMySql;

class Importer
{
    static public $data = array();

    static private $db;

    public function __construct($data = array())
    {
        isset($data) && is_array($data) ? self::$data = $data : '';

        self::$db = new Database();
    }

    public function check()
    {
        if (!isset(self::$data) || !is_array(self::$data) || !count(self::$data)) return false;

        return true;
    }

    public function import($table = 'products')
    {
        if ($productData = $this->_prepareData()) {
            $imported = false;
            foreach ($productData as $data) {
                if (self::$db->insert($table, $data)) $imported = true;
            }

            return $imported;
        } else {
            die('Failed to import.');
        }
    }

    private function _prepareData()
    {
        $productData = array();
        if (isset(self::$data['articles']) && $products = (array) self::$data['articles']) {
            foreach ($products as $product) {
                $product = (array) $product;
                $productData[] = array(
                    'product_number' => $product['article_number'],
                    'sku' => $product['sku'],
                    'shop_status' => $product['shop_status'],
                    'hidden' => $product['hidden'],
                    'weight' => $product['weight'],
                    'ean' => $product['ean'],
                    'stock' => $product['stock'],
                    'replenishment_time' => $product['replenishment_time'],
                    'tdp' => $product['tdp'],
                    'active_from' => $product['active_from'],
                    'active_until' => $product['active_until'],
                    'puid' => $product['puid'],
                    'pdf_link' => $product['pdf_link'],
                    'length' => $product['length'],
                    'width' => $product['width'],
                    'depth' => $product['depth'],
                    'deeplink' => $product['deeplink'],
                    'created_at' => $product['created'],
                    'updated_at' => $product['created'],
                    'deleted_at' => $product['deleted'],
                );
            }
        } else {
            die('Invalid data format.');
        }


        return $productData;
    }
}