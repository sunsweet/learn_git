<?php
/**
 * User: sunsweet
 * Date: 2015/5/13
 * Time: 14:58
 */

class logToConsole
{
    private $__errorObject;

    public function __construct($errorObject)
    {
        $this->__errorObject = $errorObject;
    }
    public function write()
    {
        fwrite(STDERR, $this->__errorObject->getError());
    }
}