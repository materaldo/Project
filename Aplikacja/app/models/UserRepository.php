<?php



/**
 * Class UserRepository
 *
 * This service abstracts some interactions that occurs between Confide and
 * the Database.
 */
class UserRepository
{
    /**
     * Signup a new account with the given parameters
     *
     * @param  array $input Array containing 'username', 'email' and 'password'.
     *
     * @return  User User object that may or may not be saved successfully. Check the id to make sure.
     */
    public function signup($input)
    {
        $user = new User;
        $prot = new Protector;

        $user->username = array_get($input, 'username');
        $user->email    = array_get($input, 'email');
        $user->password = array_get($input, 'password');

        // The password confirmation will be removed from model
        // before saving. This field will be used in Ardent's
        // auto validation.
        $user->password_confirmation = array_get($input, 'password_confirmation');

        // Generate a random confirmation code
        $user->confirmation_code     = md5(uniqid(mt_rand(), true));

        // Save if valid. Password field will be hashed before save
		
        $prot->first_name = array_get($input, 'first_name');
        $prot->last_name = array_get($input, 'last_name');
        $prot-> date_of_birth = array_get($input, 'date_of_birth');
        $prot->phone_number  = array_get($input, 'phone_number');
        $prot->alt_phone_number  = array_get($input, 'alt_phone_number');
       // $co=DB::table('countries')->where('id', array_get($input, 'country_select'))->first();
        //$prot->id_coun = $co->id;
		$coun=Input::get('country_select');
        $lang1=Input::get('language_select');
        $lang2=Input::get('language_select2');
        $lang3=Input::get('language_select3');
		
		$prot->id_first_lang = $lang1;
        $prot->id_second_lang = $lang2;
        $prot->id_third_lang = $lang3;
		$prot->id_coun = $coun;
		
		//$la=DB::table('languages')->where('id', array_get($input, 'language_select'))->first();
        //$prot->id_first_lang = $la->id;
        
		$prot->document_number = array_get($input, 'document_number');
        $prot->insurance_number  = array_get($input, 'insurance_number');
		
		
		$check=true;
		$user2 = DB::table('users')->where('username', array_get($input, 'username'))->first();//User::where('username','=',Input::get('username'));//
		if (isset($user2->id)){
			$check=false;
}    
		$this->save($user);
					
		$user2 = DB::table('users')->where('username', array_get($input, 'username'))->first();
        if(isset($user2) && $check==true)
		{
			$prot->id = $user2->id;	
			$prot->save();
		}
		
        return $user;
		
    }

    public function signup2($input)
    {
        $user = new User;


        $user->username = array_get($input, 'username');
        $user->email    = array_get($input, 'email');
        $user->password = array_get($input, 'password');

        // The password confirmation will be removed from model
        // before saving. This field will be used in Ardent's
        // auto validation.
        $user->password_confirmation = array_get($input, 'password_confirmation');

        // Generate a random confirmation code
        $user->confirmation_code     = md5(uniqid(mt_rand(), true));

        // Save if valid. Password field will be hashed before save
        $this->save($user);

        return $user;
    }

    /**
     * Attempts to login with the given credentials.
     *
     * @param  array $input Array containing the credentials (email/username and password)
     *
     * @return  boolean Success?
     */
    public function login($input)
    {
        if (! isset($input['password'])) {
            $input['password'] = null;
        }

        return Confide::logAttempt($input, Config::get('confide::signup_confirm'));
    }

    /**
     * Checks if the credentials has been throttled by too
     * much failed login attempts
     *
     * @param  array $credentials Array containing the credentials (email/username and password)
     *
     * @return  boolean Is throttled
     */
    public function isThrottled($input)
    {
        return Confide::isThrottled($input);
    }

    /**
     * Checks if the given credentials correponds to a user that exists but
     * is not confirmed
     *
     * @param  array $credentials Array containing the credentials (email/username and password)
     *
     * @return  boolean Exists and is not confirmed?
     */
    public function existsButNotConfirmed($input)
    {
        $user = Confide::getUserByEmailOrUsername($input);

        if ($user) {
            $correctPassword = Hash::check(
                isset($input['password']) ? $input['password'] : false,
                $user->password
            );

            return (! $user->confirmed && $correctPassword);
        }
    }

    /**
     * Resets a password of a user. The $input['token'] will tell which user.
     *
     * @param  array $input Array containing 'token', 'password' and 'password_confirmation' keys.
     *
     * @return  boolean Success
     */
    public function resetPassword($input)
    {
        $result = false;
        $user   = Confide::userByResetPasswordToken($input['token']);

        if ($user) {
            $user->password              = $input['password'];
            $user->password_confirmation = $input['password_confirmation'];
            $result = $this->save($user);
        }

        // If result is positive, destroy token
        if ($result) {
            Confide::destroyForgotPasswordToken($input['token']);
        }

        return $result;
    }

    /**
     * Simply saves the given instance
     *
     * @param  User $instance
     *
     * @return  boolean Success
     */
    public function save(User $instance)
    {
        return $instance->save();
    }
}
