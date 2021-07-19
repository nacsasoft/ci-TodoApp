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
		helper(['form', 'url']);

		if (! $this->request->isAJAX()) {
			die("AJAX kérési hiba!");
		}

		$this->TodoAppModel = new TodoAppModel();

		$data = array(
			'fcim' => $this->request->getVar('txtFeladatCim'),
			'fleiras' => $this->request->getVar('txaFeladatLeiras')
		);

		$insert = $this->TodoAppModel->add_new($data);

		$data = [
			'success' => true,
			'data' => $insert,
			'msg' => "Az új feladat felvitele sikeres volt! Hamarosan visszirányítjuk a kezdőlapra!"
		   ];
	 
		   return $this->response->setJSON($data);
		
	}
}
