<!DOCTYPE html>

<html>
<head>

    {{ App::setLocale(Session::get('lang', 'pl')); }}
    <meta charset = "utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <title>ŚDM Wrocław 2016</title>
    {{ HTML::style('css/style.css'); }}

    @yield('header')

</head>

<body>

<?php
if (Auth::user()!==null)
{
	$userLogged=Auth::user();
	//echo $userLogged->username;
}?>

<div id="main">
    <header>
        <div id="logo">
            <div id="logo_text">
            </div>
            <div>
				<nav id = "lang">Language
                    <ul>
                        <li>{{link_to_route('language.select', 'English', array('en'))}}</li>
                        <li>{{link_to_route('language.select', 'Polski', array('pl'))}} </li>
                    </ul>
				</nav>
            </div>
        </div>
		<?php
		if (isset($userLogged))
		{
		if ($userLogged->hasRole("Admin"))
        {
			echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"" . URL::to('/index') . "\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"" . URL::to('/about') . "\">" . Lang::get('default.about') . "</a></li>
					<li><a href=\"" . URL::to('/management') . "\">" . Lang::get('default.management') . "</a></li>
					<li><a href=\"" . URL::to('/search') . "\">" . Lang::get('default.search') . "</a></li>
                    <li><a href=\"" . URL::to('/contact') . "\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"" . URL::to('/users/logout') . "\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}
		elseif ($userLogged->hasRole("Organizer"))
        {
			echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"" . URL::to('/index') . "\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"" . URL::to('/about') . "\">" . Lang::get('default.about') . "</a></li>
					<li><a href=\"" . URL::to('/accommodation') . "\">" . Lang::get('default.accommodation') . "</a></li>
                    <li><a href=\"" . URL::to('/management') . "\">" . Lang::get('default.management') . "</a></li>
					<li><a href=\"" . URL::to('/search') . "\">" . Lang::get('default.search') . "</a></li>
                    <li><a href=\"" . URL::to('/contact') . "\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"" . URL::to('/users/logout') . "\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}
		elseif ($userLogged->hasRole("Protector"))
        {
			echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"" . URL::to('/index') . "\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"" . URL::to('/about') . "\">" . Lang::get('default.about') . "</a></li>
                    <li><a href=\"" . URL::to('/group/new') . "\">" . Lang::get('default.group') . "</a></li>
					<li><a href=\"" . URL::to('/group/management') . "\">" . Lang::get('default.groupmng') . "</a></li>
					<li><a href=\"" . URL::to('/search') . "\">" . Lang::get('default.search') . "</a></li>
                    <li><a href=\"" . URL::to('/contact') . "\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"" . URL::to('/users/logout') . "\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}
		elseif ($userLogged->hasRole("Participant"))
        {
			echo "<nav>   participant/accommodation
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"" . URL::to('/index') . "\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"" . URL::to('/about') . "\">" . Lang::get('default.about') . "</a></li>
					<li><a href=\"" . URL::to('/search') . "\">" . Lang::get('default.search') . "</a></li>
					<li><a href=\"" . URL::to('/participant/accommodation') . "\">" . Lang::get('default.myacc') . "</a></li>
                    <li><a href=\"" . URL::to('/contact') . "\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"" . URL::to('/users/logout') . "\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}
		}
		else {
		echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"" . URL::to('/index') . "\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"" . URL::to('/about') . "\">" . Lang::get('default.about') . "</a></li>
                   	<li><a href=\"" . URL::to('/search') . "\">" . Lang::get('default.search') . "</a></li>
                    <li><a href=\"" . URL::to('/contact') . "\">" . Lang::get('default.contact') . "</a></li>
                    <li><a href=\"" . URL::to('/users/create') . "\">" . Lang::get('default.register') . "</a></li>
					<li><a href=\"" . URL::to('/users/login') . "\">" . Lang::get('default.login') . "</a></li>
                </ul>
            </div>
        </nav>";}
        {{ Session::get('lang', 'pl'); }}
	?>
    </header>
    <div id="site_content">
        <div id="sidebar_container">
            <div class="sidebar">
				<h1>ŚDM Kraków 2016</h1>
				<a href="http://www.krakow2016.com"><img src="http://www.krakow2016.com/common/images/logos/logo_pl.png"/></a>
            </div>
            <div class="sidebar">
                <h3>{{Lang::get('default.links1')}}</h3>
                <ul>
                    <li><a href="#">First Link</a></li>
                    <li><a href="#">Another Link</a></li>
                    <li><a href="#">And Another</a></li>
                    <li><a href="#">Last One</a></li>
                </ul>
            </div>
            <div class="sidebar">
                <h3>{{Lang::get('default.links2')}}</h3>
                <ul>
                    <li><a href="#">First Link</a></li>
                    <li><a href="#">Another Link</a></li>
                    <li><a href="#">And Another</a></li>
                    <li><a href="#">Last One</a></li>
                </ul>
            </div>
        </div>
@yield('content')

    </div>
        <div id="scroll">
            <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"/></a>
        </div>
        <footer>

            <p> 
				<a href="{{ URL::to('/index') }}">{{Lang::get('default.news')}}</a> |
                <a href="{{ URL::to('/about') }}">{{Lang::get('default.about')}}</a> |
                <a href="{{ URL::to('/contact') }}">{{Lang::get('default.contact')}}</a>
            </p>

        </footer>
    </div>
    <!-- javascript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
    <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('ul.sf-menu').sooperfish();
            $('.top').click(function () {
                $('html, body').animate({scrollTop: 0}, 'fast');
                return false;
            });
        });
    </script>
	
	

</body>
</html>