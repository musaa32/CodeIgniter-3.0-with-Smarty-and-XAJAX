<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'third_party/smarty/libs/Smarty.class.php');
 
class Smartyci extends Smarty {
	
	public function __construct()
	{
		parent::__construct();

		$config =& get_config();

		$this->caching = 1;
		$this->setTemplateDir(APPPATH . 'views/templates' );
		$this->setCompileDir( APPPATH. 'views/compiled' );
		$this->setConfigDir(APPPATH . 'third_party/smarty/configs' );
		$this->setCacheDir( APPPATH . 'cache' );
	}
	
	//if specified template is cached then display template and exit, otherwise, do nothing.
	public function useCached( $tpl, $cacheId = null )
	{
		if ( $this->isCached( $tpl, $cacheId ) )
		{
			$this->display( $tpl, $cacheId );
			exit();
		}
	}
}