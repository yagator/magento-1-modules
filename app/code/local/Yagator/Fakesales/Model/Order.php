<?php

class Yagator_Fakesales_Model_Order extends Mage_Core_Model_Abstract {

    const RANGE = 45;


    public function __construct()
    {
        $this->_init('yagator_fakesales/order');

        parent::__construct();
    }

    public function generate (){
        $collection = Mage::getSingleton('catalog/product')->getCollection();
        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($collection);
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($collection);
        $collection->addAttributeToSelect('*');
        $collection->getSelect()->order('RAND()');
        $collection->getSelect()->limit(1);

        return $collection->getFirstItem();
    }
}