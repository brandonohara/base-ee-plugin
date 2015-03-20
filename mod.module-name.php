<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');	
/*
	* MODULE_NAME_DISPLAY Module
	*
	* @package   MODULE_NAME_DISPLAY
	* @author    Brandon O'Hara <brandon@brandonohara.com>
	* @copyright Copyright (c) 2014 Brandon O'Hara
*/

require_once(PATH_THIRD."MODULE_NAME_LOWER/config.MODULE_NAME_LOWER.php");
					

class MODULE_NAME_EE {
	
	function __construct(){
		//EE super global
		$this->EE =& get_instance();
	}

}
/* End of file mod.MODULE_NAME_LOWER.php */
/* Location: system/expressionengine/third_party/MODULE_NAME_LOWER/mod.MODULE_NAME_LOWER.php */