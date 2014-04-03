<?php

class ExploreController extends BaseController {

	public function getIndex()
	{
		return View::make('layout', array('ruta' => 'Explore'));
	}
  
}