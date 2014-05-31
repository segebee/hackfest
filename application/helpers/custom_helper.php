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
 * CodeIgniter Custom Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Segebee
 */

// ------------------------------------------------------------------------

function render_page($view, $data=null, $render=false)
	{
		$CI =& get_instance();	
		$CI->viewdata = (empty($data)) ? $CI->data: $data;
		
		
		$view_html = $CI->load->view($view, $CI->viewdata, $render);

		if (!$render) return $view_html;
	}

/* End of file custom_helper.php */
/* Location: ./application/helpers/custom_helper.php */