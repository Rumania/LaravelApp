<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		// return "Index del home";
		return View::make('layout', array('ruta' => 'Home'));
	}
  
}