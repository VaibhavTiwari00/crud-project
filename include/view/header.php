<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= home_path() ?>">PHP-CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= home_path() ?>">crud</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= home_path() ?>learn">Learn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= home_path() ?>fetch-ajax">Fetch(ajax)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= home_path() ?>fetch-api">Fetch(api)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= home_path() ?>login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= home_path() ?>register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= home_path() ?>logout">Logout</a>
                </li>

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>

            <button class="btn btn-outline-success" type="submit" id="login_btn" onclick="pop()">Login</button>
        </div>
    </div>
</nav>