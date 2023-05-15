<nav class="navbar navbar-expand-xl navbar-light px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img class="img-fluid" src="../assets/images/icons/logo_dark.png" alt="Logo">
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <h3>Home</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">
                        <h3>Menu</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        <h3>About</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                        <h3>Contact</h3>
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center justify-content-end ms-auto">
                <i class="mx-2 btn" onclick="toggleLanguage('ar')">
                    <img src="../assets/images/icons/language_dark.png" alt="Language" width="25px" height="25px">
                </i>
                <i class="mx-2 btn" onclick="toggleTheme()">
                    <img src="../assets/images/icons/theme_dark.png" alt="Theme" width="25px" height="25px">
                </i>
                <a class="mx-2 btn" href="cart.php">
                    <img src="../assets/images/icons/cart_dark.png" alt="Cart" width="25px" height="25px">
                </a>
            </div>
        </div>
    </div>
</nav>
