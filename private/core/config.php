<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('ROOT', 'http://localhost/school_mgmt/public');
} else {
    define('ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/public');
}

// define('ROOT', )