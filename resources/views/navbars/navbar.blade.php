<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="mpa-spa-framework.local">{{config("app.name", "MPA-SPA-Framework")}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorieën
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Boeken</a>
                      <a class="dropdown-item" href="#">Tafels</a>
                      <a class="dropdown-item" href="#">Stoelen</a>
                      <a class="dropdown-item" href="#">Banken</a>
                      <a class="dropdown-item" href="#">Bureaus</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>