<?php

class LanguageController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.languages.languages');
	}
	public function getNew()
	{
		return View::make('pl.languages.add');
	}
	public function getAdd()
	{
		$lang = Input::get('language');
		
		$language = new Language();
		$language->language = $lang;
		
		$language->save();
		return View::make('pl.languages.languages');
	}
	public function getDelete($id)
	{
		if($id>0)
		{
			$lang = Language::find($id);
			$lang->delete();
		}
		return View::make('pl.languages.languages');
	}
	public function getEdit($id)
	{
		return View::make('pl.languages.edit')->with('idL', $id);
	}
	public function getConfirm($id)
	{
		$lang = Input::get('language');
		
		Language::where('id', $id)->update(array(
			'language'=>$lang,
			));
		
		return View::make('pl.languages.languages');	
	}
}
