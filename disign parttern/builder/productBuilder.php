<?php
/**
 * Created by PhpStorm.
 * User: sunsweet
 * Date: 2015/5/14
 * Time: 15:41
 */

class productBuilder 
{
    protected $_product = NULL;
    protected $_configs = array();

    public function __construct($configs)
    {
        $this->_product = new product();
        $this->_configs = $configs;
    }

    public function build()
    {
        $this->_product->setSize($this->_configs['size']);
        $this->_product->setType($this->_configs['type']);
        $this->_product->setColor($this->_configs['color']);
    }

    public function getProduct()
    {
        return $this->_product;
    }
}