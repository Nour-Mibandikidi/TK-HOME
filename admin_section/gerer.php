<?php
session_start();
//$_SESSION = [];
require('../conf/database.php');
require('../includes/functions.php');
require('../includes/init.php');
include('../filters/auth_filter.php');
require('../includes/constants.php');


include('views/gerer.view.php');
