<?php

namespace App\Controllers;

use CI4Smarty\Config\Services;


class Home extends BaseController
{
	public function index()
	{
		

		$smarty = Services::smarty();
		
		$smarty->display('mainTemplate.tpl');
		
	}
}
