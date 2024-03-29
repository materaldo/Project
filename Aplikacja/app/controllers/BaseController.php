<?php
/**
* Controller BaseController
* 
* Base controller used as a parent for other controllers
*/

/**
     * Base controller for application
     *
     */
class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
