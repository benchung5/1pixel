<?php
	function get_data($data) 
	{
		$param = htmlspecialchars($_GET['param'], ENT_QUOTES, 'UTF-8');

		if (array_key_exists($param, $data)) {
			return $data[$param];
		} else {
			return '';
		}
	}
?>