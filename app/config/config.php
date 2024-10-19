<?php

define('BASEURL', 'http://localhost/public');

// DB
define('DB_HOST', 'localhost');
if (php_uname('s') == 'Linux') {
	define('DB_USER', 'ocak');
	define('DB_PASS', '');
} else if (php_uname('s') == 'Windows NT') {
        // Append MySQL path to the existing PATH variable
        putenv('PATH=' . getenv('PATH') . ';D:\akdmk\kbm\smt5\pw\laragon-6.0.0\laragon-6.0.0\bin\mysql\mysql-5.1.72-win32\bin');
	define('DB_USER', 'root');
	define('DB_PASS', '');
}
define('DB_NAME', 'phpmvc');

?>
