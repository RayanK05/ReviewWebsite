<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XP Game Reviews</title>
  <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/homepage.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require_once('config.inc.php');
        $mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);
    ?>
    <div class="navigation-bar">
        <div class="nav-shell">
            <ul>
                <li class="otr-logo">
                    <img src=/images/XP-Review-Logo.svg alt="XP Review Logo"/>
                </li>
                <div id="title">
                    XP Reviews
                </div>
                <div class="nav-toggle">
                    <li class="link">
                        <a href="HomePage.php"> Home </a>
                    </li>
                    <li class="link">
                        <a href="gameList.php"> Game Reviews </a>
                    </li>
                    <li class="link">
                        <a href="addReview.php">Add Review</a>
                    </li>
                    <li class="link">
                        <a href="">Sign In</a>
                    </li>
                </div>
            </ul>
            <button class="menu-button">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </div>
    </div>

    <div class="wrapper">
        <div class="top">VideoGames</div>
        <div class="bottom" aria-hidden="true">VideoGames</div>
    </div>

    <div class="introduction">
        <section id="introduction" class="hidden">
            <h2 id="intro-header">
                Welcome to XP Reviews
            </h2>

            <div class="introduction-container">
                <div id="intro-text">
                    <p>Welcome to XP Reviews, your ultimate hub for all things gaming! Whether you’re a die-hard fan of RPGs, an adrenaline-seeker chasing high-octane action, or a casual gamer looking for your next relaxing adventure, we’ve got you covered.</p>
                    <br>
                    <p>Dive into in-depth reviews, discover hidden gems, and stay updated on the latest releases. XP Reviews is more than
                        just a site—it’s a community where gamers connect, explore, and celebrate their shared passion for gaming.</p>
                </div>
                <div id="HistoricTeamPhoto">
                    <img src="../images/updown-pyramids-4k_1608815943-2048x1152.jpg" alt="Historic Team Photo">
                </div>
            </div>

        </section>
    </div>
    <div class=GameList>
        <div class="WiiGames">
            <h3>Iconic Wii Games</h3>
            <div class="break-line">
                <hr>
            </div>
        </div>


<!--        <div class="New Releases">-->
<!--            <h3>New Releases</h3>-->
<!--        </div>-->
<!--        <div class="break-line">-->
<!--            <hr>-->
<!--        </div>-->
    </div>
</body>
</html>