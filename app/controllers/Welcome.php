<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __constructor()
	{
		parent::__construct();
		$this->ajax();
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('xajax/xajax');
		
		$this->xajax->register(XAJAX_FUNCTION, array('say_hello', $this, 'say_hello'));
		$this->xajax->processRequest();
		
		
		$this->smartyci->assign("title","Smarty mit CodeIgniter");
		$this->smartyci->assign("xajax",$this->xajax);
		$this->smartyci->assign("base_url",base_url());
		$this->smartyci->assign("site_url",site_url());
		
		
		$this->smartyci->assign("description", "This is the testing page for integrating Smarty and CodeIgniter.");
		$this->smartyci->useCached( 'index.tpl' );
		$this->smartyci->display( 'index.tpl' );
 		
        
	}
	
	

	function say_hello()
	{
		$objResponse = new xajaxResponse();
	
		$objResponse->alert('hello');
	
		return $objResponse;
	} 
	
	

	
	
	
	
}
