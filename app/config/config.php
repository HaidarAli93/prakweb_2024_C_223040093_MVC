<?php

define('BASEURL', 'http://localhost/public');

// DB
define('DB_HOST', 'localhost');
if (php_uname('s') == 'Linux') {
	define('DB_USER', 'ocak');
	define('DB_PASS', '');
} else if (php_uname('s') == 'Windows NT') {
	define('DB_USER', 'root');
	define('DB_PASS', '');
}
define('DB_NAME', 'phpmvc');

?>
