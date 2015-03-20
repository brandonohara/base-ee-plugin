<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	* MODULE_NAME_DISPLAY Installer
	*
	* @package   MODULE_NAME_DISPLAY
	* @author    Brandon O'Hara <brandon@brandonohara.com>
	* @copyright Copyright (c) 2015 Brandon O'Hara
*/
require_once(PATH_THIRD."MODULE_NAME_LOWER/config.MODULE_NAME_LOWER.php");

class MODULE_NAME_EE_upd {

	var $module_name = MODULE_NAME_UPPER_EE_NAME;
    var $version = MODULE_NAME_UPPER_VERSION;
    
    function install(){
	    ee()->load->dbforge();
	    
	    $data = array(
	        'module_name' => $this->module_name,
	        'module_version' => $this->version,
	        'has_cp_backend' => 'n',
	        'has_publish_fields' => 'n'
	    );
	    ee()->db->insert('modules', $data);
	    
		return TRUE;
	}
	
	function uninstall(){
	    ee()->load->dbforge();
	    
		ee()->db->where('module_name', $this->module_name);
	    ee()->db->delete('modules');
	
	    return TRUE;
	}
	
	function update($current = ''){
	    return FALSE;
	}
}
/* End of file upd.MODULE_NAME_LOWER.php */
/* Location: system/expressionengine/third_party/MODULE_NAME_LOWER/upd.MODULE_NAME_LOWER.php */