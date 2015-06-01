@extends ('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<style>
	fieldset {border: none}
	</style>
	{{App::setLocale(Session::get('lang', 'pl'));}}
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
            <div class="form-group">
                <h4><label for="first_name">{{{ Lang::get('confide::confide.signup.first_name') }}}</label></h4>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.signup.first_name') }}}" type="text" name="first_name" id="first_name">
            </div><br>
            <div class="form-group">
                <h4><label for="last_name">{{{ Lang::get('confide::confide.signup.last_name') }}}</label></h4>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.signup.last_name') }}}" type="text" name="last_name" id="last_name">
            </div><br>
            <div class="form-group">
                <h4><label for="date_of_birth">{{{ Lang::get('confide::confide.signup.date_of_birth') }}}</label></h4>
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth">
            </div><br>
            <div class="form-group">
                <h4><label for="phone_number">{{{ Lang::get('confide::confide.signup.phone_number') }}}</label></h4>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.signup.phone_number') }}}" type="text" name="phone_number" id="phone_number">
            </div><br>
            <div class="form-group">
                <h4><label for="alt_phone_number">{{{ Lang::get('confide::confide.signup.alt_phone_number') }}}</label></h4>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.signup.alt_phone_number') }}}" type="text" name="alt_phone_number" id="alt_phone_number">
            </div><br>
            <div class="form-group">
                <h4><label for="country_select">{{{ Lang::get('confide::confide.signup.country_select') }}}</label></h4>
                {{ Form::select('country_select', $countries)}}
            </div><br>
            <div class="form-group">
                <h4><label for="language_select">{{{ Lang::get('confide::confide.signup.language_select') }}}</label></h4>
                {{ Form::select('language_select', $languages)}}
            </div><br>
			<div class="form-group">
                <h4><label for="language_select_2">{{{ Lang::get('confide::confide.signup.language_select_2') }}}</label></h4>
                {{ Form::select('language_select', $languages)}}
            </div><br>
			<div class="form-group">
                <h4><label for="language_select_3">{{{ Lang::get('confide::confide.signup.language_select_3') }}}</label></h4>
                {{ Form::select('language_select', $languages)}}
            </div><br>
            <div class="form-group">
                <h4><label for="document_number">{{{ Lang::get('confide::confide.signup.document_number') }}}</label></h4>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.signup.document_number') }}}" type="text" name="document_number" id="document_number">
            </div><br>
            <div class="form-group">
                <h4><label for="insurance_number">{{{ Lang::get('confide::confide.signup.insurance_number') }}}</label></h4>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.signup.insurance_number') }}}" type="text" name="insurance_number" id="insurance_number">
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