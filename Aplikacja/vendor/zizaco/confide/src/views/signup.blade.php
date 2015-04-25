@extends ('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<style>
	fieldset {border: none}
	</style>
@stop

@section('content')
<form method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
	<fieldset>
        @if (Cache::remember('username_in_confide', 5, function() {
            return Schema::hasColumn(Config::get('auth.table'), 'username');
        }))
            <div class="form-group">
                <h4><label for="username">{{{ Lang::get('confide::confide.signup.username') }}}</label></h4>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
            </div>
			<br>
        @endif
        <div class="form-group">
            <h4><label for="email">{{{ Lang::get('confide::confide.signup.e_mail') }}}</label></h4>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}"><small> {{ Lang::get('confide::confide.signup.confirmation_required') }}</small>
        </div><br>
        <div class="form-group">
            <h4><label for="password">{{{ Lang::get('confide::confide.signup.password') }}}</label></h4>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
        </div><br>
        <div class="form-group">
            <h4><label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label></h4>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
        </div><br>

        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>
	</fieldset>
</form>
@stop