<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">{{config("app.name", "MPA-SPA-Framework")}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categorieën<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <a id="cart" href="/cart">
            <i class="fas fa-shopping-cart"></i>
            <span>{{Session::has("cart") ? Session::get("cart")->totalQty : 0}}</span>
        </a>
        <a class="btn btn-primary" id="login" href="/user/signin">Login</a>
        <a class="btn btn-primary" id="register" href="/user/signup">Registreer</a>
        <a id="profile" href="user/profile">Profiel</a>
        <a class="btn btn-primary" id="signout" href="/user/signout">Log uit</a>
    </div>
</nav>