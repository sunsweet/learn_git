<?php
/**
 * User: sunsweet
 * Date: 2015/5/14
 * Time: 14:23
 */

class logToCSVAdapter extends errorObject
{
    private $__errorNumber, $__errorText;

    public function __construct($error)
    {
        parent::__construct($error);

        $parts = explode(":", $this->getError());

        $this->__errorNumber = $parts[0];
        $this->__errorText = $parts[1];
    }

    public function getErrorNumber()
    {
        return $this->__errorNumber;
    }

    public function getErrorText()
    {
        return $this->__errorText;
    }
}