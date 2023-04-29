<?php

class Header
{
    public function open()
    {
        echo '<header>';
    }

    public function close()
    {
        echo '</header>';
    }

    public function renderNavbar()
    {
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <i class="navbar-toggler-icon"></i>
                </button>
            </div>
            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/cuppa-joy/index.php">
                        <span class="display-6 d-inline-flex">
                            <i class="bi bi-house"></i>Home
                        </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cuppa-joy/menu.php">
                        <span class="display-6 d-inline-flex">
                            <i class="bi bi-list"></i>Menu
                        </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cuppa-joy/about.php">
                        <span class="display-6 d-inline-flex">
                            <i class="bi bi-file-person"></i>About
                        </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cuppa-joy/contact.php">
                        <span class="display-6 d-inline-flex">
                            <i class="bi bi-headset"></i>Contact
                        </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
            </div>
        </nav>
        <?php
    }
}
