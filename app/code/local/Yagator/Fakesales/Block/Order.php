<?php

class Yagator_Fakesales_Block_Order extends Mage_Core_Block_Template {

    const RANGE = 45;

    public function getFakeSale(){
        $fakesales = Mage::getModel('yagator_fakesales/order');
        return $fakesales->generate();
    }

    public function getTimeAgo(){
        return rand(2, self::RANGE);
    }
}