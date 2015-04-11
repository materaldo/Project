<!DOCTYPE html>

<html>
<head>
    <meta charset = "utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <title>ŚDM Wrocław 2016</title>
    {{ HTML::style('css/style.css'); }}
    @yield('header')
</head>

<body>

<div id="main">
    <header>
        <div id="logo">
            <div id="logo_text">

                <h2>Simple. Contemporary. Website Template.</h2>
            </div>
        </div>
        <nav>
            <div id="menu_container">
                <ul class="sf-menu" id="nav">
                    <li><a href="index.php">Aktalności</a></li>
                    <li><a href="about.php">O ŚDM</a></li>
                    <li><a href="add_group.php">Zgłoś grupę</a></li>
                    <li><a href="places.php">Nasze miejsca noclegowe</a></li>
                    <li><a href="informations.php">Informacje dla podróżnych</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="site_content">
        <div id="sidebar_container">
            <div class="sidebar">
                <h3>Latest News</h3>
                <h4>New Website Launched</h4>
                <h5>January 1st, 2013</h5>

                <p>2013 sees the redesign of our website. <a href="#">Read more</a></p>
            </div>
            <div class="sidebar">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">First Link</a></li>
                    <li><a href="#">Another Link</a></li>
                    <li><a href="#">And Another</a></li>
                    <li><a href="#">Last One</a></li>
                </ul>
            </div>
            <div class="sidebar">
                <h3>More Useful Links</h3>
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

            <p> <a href="index.php">Aktualności</a> |
                <a href="examples.php">O ŚDM</a> |
                <a href="contact.php">Zgłoś grupę</a> |
                <a href="contact.php">Nasze miejsca noclegowe</a> |
                <a href="contact.php">Informacje dla podróżnych</a> |
                <a href="contact.php">Kontakt</a>
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