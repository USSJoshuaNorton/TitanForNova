<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once MODPATH.'core/controllers/nova_main.php';

class Main extends Nova_main {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Put your own methods below this...
	 */

public function titan()
{
	$this->_regions['content'] = Location::view('main_chat', $this->skin, 'main');
	$this->_regions['title'].= $this->msgs->get_message('titan_header');
	$this->_regions['content'] = $this->msgs->get_message('titan_info');
	
	Template::assign($this->_regions);
	
	Template::render();
}
}
