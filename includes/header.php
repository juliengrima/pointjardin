<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

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

    <link type="text/css" rel="stylesheet" href="css/Main.css">


    <SCRIPT type="text/javascript">
        function bloc() {
            alert('Pas de clic droit, svp!');
            return false;
        }
    </SCRIPT>


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
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo" id="logo-container">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Acceuil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Nous contacter</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </header>

    <br>
    <br>