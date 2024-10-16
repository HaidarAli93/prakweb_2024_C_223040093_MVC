<?php

class App {
	public function __construct() {
		$url = $this->parseURL();
		var_dump($url);
	}

	public function parseURL() {
		if (isset($_GET['url'])) {
			$url = ltrim(rtrim($_GET['url'], '/'), '/public/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}

?>
