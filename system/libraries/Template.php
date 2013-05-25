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

/**
 * CodeIgniter Template Class
 *
 * Extends smarty template
 *
 */
require_once( BASEPATH.'libraries/smarty/libs/Smarty.class.php' );
class CI_Template extends Smarty {
	
   public $smarty,$templatePath,$viewsPath;
   public function __construct()
   {
        parent::__construct();
        $this->viewsPath = str_replace('system','application/views/',BASEPATH);
        $this->template_dir = $this->viewsPath;
        $this->compile_dir  = $this->viewsPath.'template_c';
        $this->cache_dir  = $this->viewsPath.'cache';
        $this->config_dir = $this->viewsPath.'configs';
   }
   public function load()
   {
       $CI =& get_instance();
       $class = $CI->router->fetch_class();
       $method = $CI->router->fetch_method();
       $this->templatePath = $this->viewsPath.$class.'/'.$method.'.tpl';
       $this->smarty->display($this->templatePath);
   }
}
// END CI_Template class
