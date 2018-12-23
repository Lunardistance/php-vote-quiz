<?php

$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;

include "views/register.php";
