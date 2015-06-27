<?php
/**
* Model UserAccommodation
* 
* Representation of data about user-accommodation relations
*/

/**
 * Class UserAccommodation
 *
 * Class representing instances of accommodation for user in database
 */
class UserAccommodation extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users_accommodations';
}
