<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\core;

class Lang {

	public $lang;

	public function __construct() 
	{
		$this->lang = 'en';
    }

    public function loadingLang()
    {
    	require 'application/lang/'.$this->lang.'.php';
    }
}



?>