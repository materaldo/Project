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
	$user=Auth::user();
	//echo $user->username;
}?>

<div id="main">
    <header>
        <div id="logo">
            <div id="logo_text">
            </div>
            <div>

                    <ul>
                        <li>{{link_to_route('language.select', 'English', array('en'))}}</li>
                        <li>{{link_to_route('language.select', 'Polski', array('pl'))}} </li>
                    </ul>

            </div>
        </div>
		<?php
		if (isset($user))
		{
		if ($user->hasRole("Admin"))
        {
			echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"http://zpi.dev\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"http://zpi.dev/about\">" . Lang::get('default.about') . "</a></li>
					<li><a href=\"http://zpi.dev/management\">" . Lang::get('default.management') . "</a></li>
					<li><a href=\"http://zpi.dev/search\">" . Lang::get('default.search') . "</a></li>
                    <li><a href=\"http://zpi.dev/contact\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"http://zpi.dev/users/logout\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}
		elseif ($user->hasRole("Organizer"))
        {
			echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"http://zpi.dev\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"http://zpi.dev/about\">" . Lang::get('default.about') . "</a></li>
					<li><a href=\"http://zpi.dev/accommodation\">" . Lang::get('default.accommodation') . "</a></li>
                    <li><a href=\"http://zpi.dev/management\">" . Lang::get('default.management') . "</a></li>
					<li><a href=\"http://zpi.dev/search\">" . Lang::get('default.about') . "</a></li>
                    <li><a href=\"http://zpi.dev/contact\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"http://zpi.dev/users/logout\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}
		elseif ($user->hasRole("Protector"))
        {
			echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"http://zpi.dev/index\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"http://zpi.dev/about\">" . Lang::get('default.about') . "</a></li>
                    <li><a href=\"http://zpi.dev/group/new\">" . Lang::get('default.group') . "</a></li>
					<li><a href=\"http://zpi.dev/group/management\">" . Lang::get('default.groupmng') . "</a></li>
					<li><a href=\"http://zpi.dev/search\">" . Lang::get('default.about') . "</a></li>
                    <li><a href=\"http://zpi.dev/contact\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"http://zpi.dev/users/logout\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}
		elseif ($user->hasRole("Participant"))
        {
			echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"http://zpi.dev/index\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"http://zpi.dev/about\">" . Lang::get('default.about') . "</a></li>
					<li><a href=\"http://zpi.dev/search\">" . Lang::get('default.search') . "</a></li>
					<li><a href=\"http://zpi.dev/participant/accommodation\">" . Lang::get('default.myacc') . "</a></li>
                    <li><a href=\"http://zpi.dev/contact\">" . Lang::get('default.contact') . "</a></li>
					<li><a href=\"http://zpi.dev/users/logout\">" . Lang::get('default.logout') . "</a></li>
                </ul>
            </div>
        </nav>";
		}	
		}
		else {
		echo "<nav>
            <div id=\"menu_container\">
                <ul class=\"sf-menu\" id=\"nav\">
                    <li><a href=\"http://zpi.dev/index\">" . Lang::get('default.news') . "</a></li>
                    <li><a href=\"http://zpi.dev/about\">" . Lang::get('default.about') . "</a></li>
                   	<li><a href=\"http://zpi.dev/search\">" . Lang::get('default.about') . "</a></li>
                    <li><a href=\"http://zpi.dev/contact\">" . Lang::get('default.contact') . "</a></li>
                    <li><a href=\"http://zpi.dev/users/create\">" . Lang::get('default.register') . "</a></li>
					<li><a href=\"http://zpi.dev/users/login\">" . Lang::get('default.login') . "</a></li>
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
				<a href="http://zpi.dev">{{Lang::get('default.news')}}</a> |
                <a href="http://zpi.dev/about">{{Lang::get('default.about')}}</a> |
                <a href="http://zpi.dev/contact">{{Lang::get('default.contact')}}</a>
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