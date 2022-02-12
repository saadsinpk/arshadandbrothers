<?php
ob_start();
include 'connect.php';
session_start();
unset($_SESSION);
session_destroy();

header("Location: $website");

ob_end_flush();?>