<?php $activePage = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid pe-0">
            <a class="navbar-brand" href="#">Global Tuning Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "index.php" ? 'active' : '' ?>" aria-current="page"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ecu-remaping.php">ECU Re-Maping</a></li>
                            <li><a class="dropdown-item" href="ecu-remaping-solutions.php">ECU Re-Maping Solutions</a></li>
                            <li><a class="dropdown-item" href="light-commercial-tuning.php">Light Commercial Tuning</a></li>
                            <li><a class="dropdown-item" href="motorcycle-dyno-tuning.php">Motorcycle Dyno Tuning</a></li>
                            <li><a class="dropdown-item" href="tractor-ecu-remaping.php">Tractor ECU Re-Maping</a></li>
                            <li><a class="dropdown-item" href="dsg-tuning.php">DSG Tuning/Re-Maping</a></li>
                            <li><a class="dropdown-item text-truncate" href="pops-and-bangs.php">Pops & Bangs (Crackle Map / Over-Run Map)</a></li>
                            <li><a class="dropdown-item" href="launch-control.php">Launch Control</a></li>
                            <li><a class="dropdown-item" href="unbrick-ecu-recovery.php">UnBrick /ECU Recovery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "search-ECU-info.php" ? 'active' : '' ?>"
                            aria-current="page" href="search-ECU-info.php">Search ECU Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "shop.php" ? 'active' : '' ?>"
                            aria-current="page" href="search-ECU-info.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "data-trouble-codes.php" ? 'active' : '' ?>"
                            href="data-trouble-codes.php">Data Trouble Codes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "original-files.php" ? 'active' : '' ?>"
                            href="original-files.php">Original Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "damos-files.php" ? 'active' : '' ?>"
                            href="damos-files.php">Damos Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "about.php" ? 'active' : '' ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "contact.php" ? 'active' : '' ?>"
                            href="contact.php">Contact</a>
                    </li>
                </ul>
                <?php
                if (isset($_SESSION['auth'])) {
                    ?>
                    <ul class="navbtns">
                        <a href="user/index.php" class="main-btn btn">Dashboard</a>
                        <a href="logout.php" class="sndry-btn btn">Logout</a>
                    </ul>
                    <?php
                } else {
                    ?>
                    <ul class="navbtns">
                        <a href="register.php" class="main-btn btn">Register</a>
                        <a href="login.php" class="sndry-btn btn">Login</a>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>
    </nav>
</header>