<?php

session_start();
session_destroy();

header('loaction:login.php');

?>