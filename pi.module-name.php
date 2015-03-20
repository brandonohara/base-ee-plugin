<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	require_once(PATH_THIRD."MODULE_NAME_LOWER/config.MODULE_NAME_LOWER.php");
	
	$plugin_info = array(
		'pi_name' 			=> 'MODULE_NAME_UPPER_NAME',
		'pi_version' 		=> 'MODULE_NAME_UPPER_VERSION',
		'pi_author' 		=> 'Brandon OHara',
		'pi_author_url' 	=> 'http://brandonohara.com/',
		'pi_description' 	=> '',
	    'pi_usage'        	=> MODULE_NAME_EE::usage()
	);

	class MODULE_NAME_EE {
		public $plugin_name = MODULE_NAME_UPPER_NAME;
    
		public function __construct(){
			
		}
		
		public static function usage(){
	        return "";
	    }
	}

/* End of file pi.MODULE_NAME_LOWER.php */
/* Location: ./system/expressionengine/third_party/MODULE_NAME_LOWER/pi.MODULE_NAME_LOWER.php */