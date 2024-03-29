<?php
/**
* Controller LanguageController
* 
* Contains methods used for language management
*/

/**
     * Language Controller
     *
     */
class LanguageController extends BaseController {

	/**
	* Display view of languages for members
	* @return view
	*/
	public function getIndex()
	{
		return View::make('languages.languages');
	}
	/**
	* Display view allows to create new language
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
	* @param integer $id is a representation of language id
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
	* @param integer $id is a representation of language id
	* @return view
	*/
	public function getEdit($id)
	{
		return View::make('languages.edit')->with('idL', $id);
	}
	/**
	* function update language from data base 
	* @param integer $id is a language id 
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
