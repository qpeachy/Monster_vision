<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" href="icon.png" type="image/png" />
    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <meta name="theme-color" content="#fafafa">
</head>

<body>

<!-- Barre de Navigation -->

<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 dark">
                    <li class="nav-item">
                        <a class="nav-link"  href="vueVisite.php">Museum Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vueVisiteGenerer.php.php">Visite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vueExposition.phpxposition.php">Exposition</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><br>

<div class="row">
    <p class="h2 text-center">Nouvelle Entrée</p>
</div><br>
<div class="row">
    <form action="">
        <div class="row">
            <div class="col-4">
                <div class="form-control">
                    <label class="form-control-label" for="nombre d'enfants">
                        Nombre d'entrées Enfants
                    </label>
                    <input class="form-control form-control-sm" type="text" placeholder="nombre d'enfants" aria-label="nombre d'enfants">
                </div>
                <div class="form-control">
                    <label class="form-control-label" for="nombre d'adultes">
                        Nombre d'entrées Adultes
                    </label>
                    <input class="form-control form-control-sm" type="text" placeholder="nombre d'adultes" aria-label="nombre d'adultes">
                </div>

            </div>
            <div class="col-6">
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="" id="Check1">
                    <label class="form-check-label" for="Check1">
                        La perche jaune
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="Check2">
                    <label class="form-check-label" for="Check2">
                        La perche de noel
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="Check3">
                    <label class="form-check-label" for="Check3">
                        La perche de la saint patrick
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="Check4">
                    <label class="form-check-label" for="Check4">
                        La perche de caranbolage
                    </label>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-outline-dark">Générer tarif</button>
        </div>
        <div class="row">
            <div class="col-auto">
                <label for="prix">Prix:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="prix" name="prix" value="" readonly>
            </div>
        </div>
    </form>
</div><br>

<!-- FOOTER -->
<footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>


<!-- Javascript. -->
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
