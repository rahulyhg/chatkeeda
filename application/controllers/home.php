<?php

class Home_Controller extends Base_Controller {
	public function action_index()
	{
		$error = "";
		$success = "";
		return View::make('home.index')->with('error', $error)->with('success', $success);
	}
}