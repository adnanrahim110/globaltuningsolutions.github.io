<?php
$activePage = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
$servicesPages = [
    'ecu-remaping.php',
    'ecu-remaping-solutions.php',
    'light-commercial-tuning.php',
    'motorcycle-dyno-tuning.php',
    'tractor-ecu-remaping.php',
    'dsg-tuning.php',
    'pops-and-bangs.php',
    'launch-control.php',
    'unbrick-ecu-recovery.php'
];

$isServicesActive = in_array($activePage, $servicesPages);
?>
<header>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid pe-0">
            <a class="navbar-brand" href="https://globaltuningsolutions.com">Global Tuning Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "index.php" ? 'active' : '' ?>" aria-current="page"
                            href="index">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= $isServicesActive ? 'active' : '' ?>" href="javascript:void(0)"
                            role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ecu-remaping">ECU Re-Maping</a></li>
                            <li><a class="dropdown-item" href="ecu-remaping-solutions">ECU Re-Maping Solutions</a>
                            </li>
                            <li><a class="dropdown-item" href="light-commercial-tuning">Light Commercial Tuning</a>
                            </li>
                            <li><a class="dropdown-item" href="motorcycle-dyno-tuning">Motorcycle Dyno Tuning</a>
                            </li>
                            <li><a class="dropdown-item" href="tractor-ecu-remaping">Tractor ECU Re-Maping</a></li>
                            <li><a class="dropdown-item" href="dsg-tuning">DSG Tuning/Re-Maping</a></li>
                            <li><a class="dropdown-item text-truncate" href="pops-and-bangs">
                                    Pops & Bangs (Crackle Map / Over-Run Map)</a></li>
                            <li><a class="dropdown-item" href="launch-control">Launch Control</a></li>
                            <li><a class="dropdown-item" href="unbrick-ecu-recovery">UnBrick /ECU Recovery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "search-ECU-info.php" ? 'active' : '' ?>" aria-current="page"
                            href="search-ECU-info">Search ECU Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "shop.php" ? 'active' : '' ?>" aria-current="page"
                            href="shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "data-trouble-codes.php" ? 'active' : '' ?>"
                            href="data-trouble-codes">Data Trouble Codes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "original-files.php" ? 'active' : '' ?>"
                            href="original-files">Original Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "damos-files.php" ? 'active' : '' ?>" href="damos-files">Damos
                            Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "about.php" ? 'active' : '' ?>" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "contact.php" ? 'active' : '' ?>" href="contact">Contact</a>
                    </li>
                </ul>
                <?php
                if (isset($_SESSION['auth'])) {
                    if ($_SESSION['role_as'] == 1) {
                        // If the user is an admin
                ?>
                        <ul class="navbtns">
                            <a href="admin/dashboard" class="main-btn btn">Admin Dashboard</a>
                            <a href="logout" class="sndry-btn btn">Logout</a>
                        </ul>
                    <?php
                    } elseif ($_SESSION['role_as'] == 0) {
                        // If the user is a regular user
                    ?>
                        <ul class="navbtns">
                            <a href="user/dashboard" class="main-btn btn">User Dashboard</a>
                            <a href="logout" class="sndry-btn btn">Logout</a>
                        </ul>
                    <?php
                    }
                } else {
                    // If the user is not logged in
                    ?>
                    <ul class="navbtns">
                        <a href="register" class="main-btn btn">Register</a>
                        <a href="login" class="sndry-btn btn">Login</a>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</header>
