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


		//dinamikusan állítom be az ajax scriptet, itt csak a script fájl nevét
		//adom meg kiterjesztés nélkül:
		$smarty->assign('jsfile', "Feladat_ajax"); 
		$smarty->assign('activemenu', "ujFeladat");
		$smarty->display("ujFeladat.tpl");
		
	}

	public function ujFelvitel()
	{
		
		//uj feladat felvitel
	
		//form adatok begyüjtése és az url biztonságos betöltése:
		helper(['form', 'url']);


		if (! $this->request->isAJAX()) {
			die("AJAX kérési hiba!");
		}

		$validation =  \Config\Services::validation();

		//ellenörzési szabályok létrehozása a hibaüzenetekkel együtt:
		$validation->setRules([
			"txtFeladatCim" => [
				"rules" => "required|min_length[5]|max_length[25]",
				"errors" => [
							"required" => "Feladat címe mező kitöltése kötelező!",
							"min_length" => "Feladat címe minimum 5 karakter hosszú legyen!",
							"max_length" => "Feladat címe maximum 25 karakter hosszú lehet!"
						]
				],
			"txaFeladatLeiras" => [
				"rules" => "required|min_length[2]",
				"errors" => [
							"required" => "Feladat leírása szövegmező kitöltése kötelező!",
							"min_length" => "Feladat leírása minimum 2 karakter hosszú legyen!"
						]
				]
		]);

		//a formról átvett adatok megfelelnek a szabályoknak?
		if(! $validation->withRequest($this->request)->run())
        {
        	//hiba va az átvett adatokkal, lekérjük a konkrét hibát a fentebb megadott szabályból:
			$cimError = $validation->getError("txtFeladatCim");
			$leirasError = $validation->getError("txaFeladatLeiras");
							
			//user tájékoztatása a szerveroldali hibáról:	
			$data = [
				'server_error' => true,
				'msg' => "Az új feladat felvitele sikertelen volt!\n" . $cimError . "\n" . $leirasError
			   ];
		 
			return $this->response->setJSON($data);
        }
        else
		{
			//adatok rendben vannak fel lehet vinni a db-be őket:
			$this->TodoAppModel = new TodoAppModel();

			$data = array(
				'fcim' => $this->request->getVar('txtFeladatCim'),
				'fleiras' => $this->request->getVar('txaFeladatLeiras')
			);

			$insert = $this->TodoAppModel->add_new($data);

			//sikeres felvitelről visszajelzés a usernek:
			$data = [
				'server_error' => false,
				'msg' => "Az új feladat felvitele sikeres volt! Hamarosan visszirányítjuk a kezdőlapra!"
			   ];
		 
			return $this->response->setJSON($data);

		}
		
	}
}
