<?php

namespace App\Controllers;

use function PHPUnit\Framework\throwException;

use App\Models\TodoAppModel;
use CI4Smarty\Config\Services;

use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class TodoAppController extends BaseController
{
	private $db;

	public function index()
	{
		$smarty = Services::smarty();
		
		//lekérjük a modeltől az összes feladatot:
		$this->TodoAppModel = new TodoAppModel();
		$feladatok = $this->TodoAppModel->get_all_todo();
		
		//sablon feltöltése és az index oldal megjelenítése:
		$smarty->assign("feladatlista", $feladatok);
		$smarty->assign("activemenu", "index");
		$smarty->display("mainTemplate.tpl");
	}
	
	public function ujFeladat()
	{
		$smarty = Services::smarty();
		$smarty->assign('activemenu', "ujFeladat");
		$smarty->display("ujFeladat.tpl");
		
	}

	public function ujFelvitel()
	{
		//uj feladat felvitel
	
		//form adatok és begyüjtése az url biztonságos betöltése:
		//helper(['form', 'url']);

		if (! $this->request->isAJAX()) {
			die("BUMM");
		}

		$query = service('request')->getPost('txtFeladatCim');
    	var_dump($this->request->getPost('txtFeladatCim'));
		die("OK");




		$this->TodoAppModel = new TodoAppModel();

		$data = array(
			'fcim' => $this->request->getPost('txtFeladatCim'),
			'fleiras' => $this->request->getPost('txaFeladatLeiras')
		); 

		die($this->request->getPost('txtFeladatCim'));

		/* $data = array(
			"fcim" => "BUMM",
			"fleiras" => "Bumm leírása..."
		);*/

		$insert = $this->TodoAppModel->add_new($data);
		echo json_encode(array("status" => TRUE));
		
	}
}
