<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Point Jardin - Matériaux pour le jardin</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <!--Import jQuery before materialize.js-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/Main.css">


    <SCRIPT type="text/javascript">
        function bloc() {
            alert('Pas de clic droit, svp!');
            return false;
        }
    </SCRIPT>

    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });
    </script>


    <SCRIPT type="text/javascript">
        function chiffres(objInput) {
            var reg = /^[0-9]*$/;
            if (!reg.test(objInput.value)) {
                objInput.value = objInput.value.substring(0, objInput.value.length - 1);
            }
        }
    </SCRIPT>

</head>

<body class="back">

<header>
    <div class="navbar-fixed">
        <nav class="light-green lighten-1" role="navigation">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo" id="logo-container"><img src="images/logo3.png" class="imglogo"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="contact.php" class="contact">Nous contacter</a></li>
                    <li><i class="material-icons">search</i></li>
                </ul>

                <ul class="right hide-on-med-and-down" id="mobile-demo">
                    <li><a href="#"><i class="material-icons">home</i></a></li>
                    <li><a href="#"><i class="material-icons">person_pin</i></a></li>
                    <li><a href="contact.php" class="contact"><i class="material-icons">email</i></a></li>
                    <li><i class="material-icons">search</i></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
