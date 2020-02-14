<?php

require_once 'config.php';

session_regenerate_id();

echo session_id();

echo '<pre>';

var_dump($_SESSION);