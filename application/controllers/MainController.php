<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Sistem;
use application\lib\Pagination;
use application\lib\SxGeo;
use application\lib\SteamAPI;
use application\models\User;


class MainController extends Controller
{
	public function indexAction()
	{
		if (!empty($_POST)) {
			$url = 'stats/search/'.$_POST['name'];
			$this->view->location($url);
		}
		$id = 1;
		if (!isset($this->route['page'])) {
			$page = 1;
		}else {
			$page = $this->route['page'];
		}
		
		$position = ($page * 9) - (9 - $page);

		$SxGeo = new SxGeo('application/lib/SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY); 
		$sistem = new Sistem;

		$pagination = new Pagination($this->route, $this->model->userCount());
		$vars = [
			'users' => $this->model->getUsers($this->route),
			'id' => $position,
			'statisticServer' => $this->model->statisticServer(),
			'sistem' => $sistem,
			'pagination' => $pagination->get(),
			'sxgeo' => $SxGeo,
		];
		
		$this->view->render(TITLE_PAGE_HAME, $vars);
	}

	public function lastrecordsAction()
	{
		$sistem = new Sistem;
		$User = new User;

		$vars = [
			'statisticServer' => $this->model->statisticServer(),
			'sistem' => $sistem,
			'lastrecords' => $this->model->lastrecords(),
			'style' => $sistem->style(),
		];

		$this->view->render(LASTRECORDS,$vars);
	}

	public function searchAction()
	{
		$SxGeo = new SxGeo('application/lib/SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY); 
		$sistem = new Sistem;
		
		$search = $this->route['value'];

		$vars = [
			'search' => rawurldecode($search),
			'user' => $this->model->search(rawurldecode($search)),
			'sistem' => $sistem,
			'statisticServer' => $this->model->statisticServer(),
			'sxgeo' => $SxGeo,
		];

		$this->view->render(TITLE_PAGE_SEARCH_PLAYERS,$vars);
	}
}