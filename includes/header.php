<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" alt="Formula 1">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'index.php')) { echo 'active'; } ?>">
                    <a class="nav-link" href="index.php">Strona domowa</a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'statystyki.php')) { echo 'active'; } ?>">
                    <a class="nav-link" href="statystyki.php">Statystyki</a>
                </li>
            </ul>
        </div>
    </nav>
</header>