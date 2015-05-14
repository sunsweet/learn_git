<?php
/**
 * User: sunsweet
 * Date: 2015/5/13
 * Time: 14:54
 */

class errorObject
{
    private $__error;

    public function __construct($error)
    {
        $this->__error = $error;
    }
    public function  getError()
    {
        return $this->__error;
    }
}
