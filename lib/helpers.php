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

	function is_page_group($page_list) 
	{
		if (in_array($_SERVER[REQUEST_URI], $page_list)) {
			return true;
		} 

		return false;
	}
?>