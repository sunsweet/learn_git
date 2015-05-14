<?php
session_start();
$_SESSION['lock'] = "lock change";
echo $_SESSION['lock'];
