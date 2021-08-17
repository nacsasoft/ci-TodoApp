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

	//érvényességi szabályok a form adatok ellenörzéséhez.
	//private tömbben lesz tárolva mert új felvitelekor és szerkesztéskor is
	//ugyanazokat a szabályokat kell érvényesíteni!!
	private $felvitel_rules;



	public function __construct() {

    	$this->felvitel_rules = array(
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
		);
  	}


  	/**
	 * 
  	 * Főoldal - feladatok listázása
  	 *
  	 */
	public function TodoApp()
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

	/**
	 * 
	 * Új feladat felvitel oldal megjelenítése
	 *
	 */
	public function ujFeladat()
	{
		$smarty = Services::smarty();

		//dinamikusan állítom be az ajax scriptet, itt csak a script fájl nevét
		//adom meg kiterjesztés nélkül:
		$smarty->assign('jsfile', "Feladat_ajax");
		$smarty->assign('activemenu', "ujFeladat");
		$smarty->display("ujFeladat.tpl");

	}

	/**
	 * Új feladat felvitele az adatbázisba.
	 * Form-ról átvett adatok szerver oldali ellenörzése. A szabályokat private tömbben
	 * tárolom ($this->felvitel_rules)!
	 *
	 * @param $data :
	 *        = "ujfeladat" akkor új felvitel lesz (INSERT)
	 *        = "szerkeszt" akkor már meglévő feladat adatait kell frissíteni (UPDATE)
	 *
	 */
	public function ujFelvitel($data)
	{

		//if ($data == "ujfeladat") { die("BUMM"); }

		//form adatok begyüjtése és az url biztonságos betöltése:
		helper(['form', 'url']);


		if (! $this->request->isAJAX()) {
			die("AJAX kérési hiba!");
		}

		$validation =  \Config\Services::validation();

		//ellenörzési szabályok létrehozása a hibaüzenetekkel együtt:
		$validation->setRules($this->felvitel_rules);

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

			//$insert = $this->TodoAppModel->save($data);  -is jó lehet de akkor a model osztályt kell kibővíteni az engedélyezett mezőnevekkel.....
			$insert = $this->TodoAppModel->add_new_todo($data);

			//sikeres felvitelről visszajelzés a usernek:
			$data = [
				'server_error' => false,
				'msg' => "Az új feladat felvitele sikeres volt! Hamarosan visszirányítjuk a kezdőlapra!"
			   ];

			return $this->response->setJSON($data);

		}

	}

	/**
	 * Főoldalon a listából kiválasztott feladat lekérdezése a db-ből
	 *
	 * @param 		$fid 		-feladat azonosítója
	 *
	 * @return 		$fleiras 	-feladat leírása
	 */
	public function kivalasztottFeladat($fid)
	{
		$this->TodoAppModel = new TodoAppModel();
		$fleiras = $this->TodoAppModel->get_todo_by_id($fid);

		echo $fleiras->fleiras;
	}

	/**
	 * 
	 * Feladat szerkesztése oldal megjelenítése a kiválasztott feladattal
	 * 
	 * @param		$fid	Feladat azonosító
	 *
	 */
	public function Szerkesztes($fid)
	{
		$smarty = Services::smarty();

		$this->TodoAppModel = new TodoAppModel();
		$feladat = $this->TodoAppModel->get_todo_by_id($fid);

		//dinamikusan állítom be az ajax scriptet, itt csak a script fájl nevét
		//adom meg kiterjesztés nélkül:
		$smarty->assign("txtFeladatCim", $feladat->fcim);
		$smarty->assign("txaFeladatLeiras", $feladat->fleiras);
		$smarty->assign("jsfile", "Feladat_ajax");
		$smarty->assign("activemenu", "Szerkeszt");
		$smarty->display("feladatSzerkesztese.tpl");

		//return redirect()->to(base_url("Todo-Szerkesztes/$fid"));


	}
}
