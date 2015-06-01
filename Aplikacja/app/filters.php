<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

//admin organizator
Entrust::routeNeedsPermission('organizer/message', 'perm5');
Entrust::routeNeedsPermission('management', 'perm5');
Entrust::routeNeedsPermission('accommodation*', 'perm5');
Entrust::routeNeedsPermission('group', 'perm5');
Entrust::routeNeedsPermission('group/details*', 'perm5');
Entrust::routeNeedsPermission('group/chooseplace*', 'perm5');
Entrust::routeNeedsPermission('group/split*', 'perm5');
Entrust::routeNeedsPermission('group/unconfirmed', 'perm5');
Entrust::routeNeedsPermission('group/assign*', 'perm5');
Entrust::routeNeedsPermission('group/assignment', 'perm5');
Entrust::routeNeedsPermission('group/dataexport', 'perm5');

//admin	
Entrust::routeNeedsPermission('language*', 'perm1');
Entrust::routeNeedsPermission('country*', 'perm1');
//admin, org, prot
Entrust::routeNeedsPermission('participant/chooseplace', 'perm6');
Entrust::routeNeedsPermission('participant/details*', 'perm6');
//participant
Entrust::routeNeedsPermission('participant/sendmail', 'perm4');
Entrust::routeNeedsPermission('participant/accommodation', 'perm4');
Entrust::routeNeedsPermission('participant/change', 'perm4');
//protector
Entrust::routeNeedsPermission('group/new', 'perm3');
Entrust::routeNeedsPermission('group/edit*', 'perm3');
Entrust::routeNeedsPermission('group/management', 'perm3');
Entrust::routeNeedsPermission('group/message*', 'perm3');
Entrust::routeNeedsPermission('group/participantdetails*', 'perm3');
Entrust::routeNeedsPermission('participant/add*', 'perm3');
Entrust::routeNeedsPermission('participant/chooseplaceprotector*', 'perm3');


/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
