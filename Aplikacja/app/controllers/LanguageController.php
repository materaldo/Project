<?php

class LanguageController extends BaseController {

	/**
	* @return view
	*/
	public function getIndex()
	{
		return View::make('languages.languages');
	}
	/**
	* @return view
	*/
	public function getNew()
	{
		return View::make('languages.add');
	}
	/**
	* function add language to data base 
	* @return view
	*/
	public function getAdd()
	{
		$lang = Input::get('language');
		
		$language = new Language();
		$language->language = $lang;
		
		$language->save();
		return View::make('languages.languages');
	}
	/**
	* function delete language from data base 
	* @return view
	*/
	public function getDelete($id)
	{
		if($id>0)
		{
			$lang = Language::find($id);
			$lang->delete();
		}
		return View::make('languages.languages');
	}
	/**
	* function edit language from data base 
	* @return view
	*/
	public function getEdit($id)
	{
		return View::make('languages.edit')->with('idL', $id);
	}
	/**
	* function update language from data base 
	* @$id is a language id 
	* @return view
	*/
	public function getConfirm($id)
	{
		$lang = Input::get('language');
		
		Language::where('id', $id)->update(array(
			'language'=>$lang,
			));
		
		return View::make('languages.languages');	
	}
}
