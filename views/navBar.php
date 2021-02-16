<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>

    <link rel="preconnect" href="https://fonts.gstatic.com"> <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">     <link rel="icon" href="public/images/cg-favicon.png" sizes="32x32">

    <link rel="stylesheet" href="public/css/app.css">

</head>
<body>

<nav class="navBar nav-flex-container navbar-header">
        <div class="nav-flex-item-1">
            <a class=" nav-logo" href="/">
                <img src="public/images/giraffe.png" alt="">
                EcoQuiz</a>
        </div>
        <div class="nav-flex-item-2">
            <ul class="nav-links">
                <li>
                    <a href="/quiz">Quiz</a>
                </li>
                <li>
                    <a href="/leaderboard">Leaderboard</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="nav-flex-item-3">
            <div class="nav-login">
                <a href="/login"><button class="logInButton">Log In</button></a>
                <a href="/register"><button class="registerButton">Register</button></a>
            </div>
        </div>

        <div class="burger nav-flex-item-4">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>



<script src="public/js/app.js"></script>
</body>
</html>