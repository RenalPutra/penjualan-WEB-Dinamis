<?php
require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__."/config.php");

session_destroy();
header("Location: login.php");