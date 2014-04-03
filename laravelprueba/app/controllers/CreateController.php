<?php

class CreateController extends BaseController {

	public function getIndex()
	{
		return View::make('layout', array('ruta' => 'Create'));
	}
  
}