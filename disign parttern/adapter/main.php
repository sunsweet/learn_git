<?php
/**
 * User: sunsweet
 * Date: 2015/5/13
 * Time: 15:04
 */
require "errorObject.php";
require "logToConsole.php";
require "logToCSVAdapter.php";
require "logToCSV.php";
////create the new 404 error object
//$error = new errorObject("404:Not Found");
//
////write the error to the console
//$log = new logToConsole($error);
//$log->write();
$error = new logToCSVAdapter("404:Not Fuond");
$log = new logToCSV($error);
$log->write();

