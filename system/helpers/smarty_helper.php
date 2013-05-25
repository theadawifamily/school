<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------
if ( ! function_exists('smarty_function_get_include_path'))
{
	function smarty_function_get_include_path($params,$smarty)
	{
                $CI = &get_instance();
		return $CI->config->item('base_url');
	}
}

/* End of file array_helper.php */
/* Location: ./system/helpers/array_helper.php */