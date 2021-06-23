<?php

namespace App\Controllers;

use function PHPUnit\Framework\throwException;

use CI4Smarty\Config\Services;


class Home extends BaseController
{
	public function index()
	{
		$smarty = Services::smarty();
		
		$smarty->assign('activemenu', "index");
		$smarty->display("mainTemplate.tpl");
	}
	
	public function ujFeladat()
	{
		//die($page);

		$smarty = Services::smarty();
				
		$smarty->assign('activemenu', "ujFeladat");
		$smarty->display("ujFeladat.tpl");
		
	}
}
