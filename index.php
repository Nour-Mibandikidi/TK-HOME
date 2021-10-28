<?php
session_start();
//$_SESSION = [];
require('conf/database.php');
require('includes/functions.php');
require('includes/init.php');
require('includes/constants.php');

include('views/index.view.php');
