<style> body{
	font: normal .80em 'Arial'; 
}
</style>
<h1>{{ Lang::get('confide::confide.email.account_confirmation.subject') }}</h1>

<p>{{ Lang::get('confide::confide.email.account_confirmation.greetings', array('name' => (isset($user['username'])) ? $user['username'] : $user['email'])) }},</p>
<p> Twoje hasło do serwisu to: </p>{{$password}}
	
<p>{{ Lang::get('confide::confide.email.account_confirmation.body') }}</p>
<a href='{{{ URL::to("users/confirm/{$user['confirmation_code']}") }}}'>
    {{{ URL::to("users/confirm/{$user['confirmation_code']}") }}}
</a>
<p>{{ Lang::get('confide::confide.email.account_confirmation.farewell') }}</p>


