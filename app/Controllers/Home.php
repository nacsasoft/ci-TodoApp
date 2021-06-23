<?php

namespace App\Controllers;

use function PHPUnit\Framework\throwException;

use CI4Smarty\Config\Services;


class Home extends BaseController
{
	private $db;

	public function index()
	{
		$smarty = Services::smarty();
		
		$db = db_connect();	//\Config\Database::connect();
		$query = $db->query("SELECT * FROM feladatok ORDER BY fid;");
		$feladatok = $query->getResult();

		
		$smarty->assign("feladatlista", $feladatok);
		$smarty->assign("activemenu", "index");
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
