<?php
    // Get the current script name
    $activePage = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);

    // Define the page title mapping
    $pageTitles = [
        'index.php' => 'Home',
        'ecu-remaping.php' => 'ECU Re-Maping',
        'ecu-remaping-solutions.php' => 'ECU Re-Maping Solutions',
        'light-commercial-tuning.php' => 'Light Commercial Tuning',
        'motorcycle-dyno-tuning.php' => 'Motorcycle Dyno Tuning',
        'tractor-ecu-remaping.php' => 'Tractor ECU Re-Maping',
        'dsg-tuning.php' => 'DSG Tuning/Re-Maping',
        'pops-and-bangs.php' => 'Pops & Bangs (Crackle Map / Over-Run Map)',
        'launch-control.php' => 'Launch Control',
        'unbrick-ecu-recovery.php' => 'UnBrick /ECU Recovery',
        'search-ECU-info.php' => 'Search ECU Info',
        'shop.php' => 'Shop',
        'data-trouble-codes.php' => 'Data Trouble Codes',
        'original-files.php' => 'Original Files',
        'damos-files.php' => 'Damos Files',
        'about.php' => 'About',
        'contact.php' => 'Contact'
    ];

    // Define the navbar structure with dropdowns
    $navbar = [
        'Home' => 'index.php',
        'Services' => [
            'ECU Re-Maping' => 'ecu-remaping.php',
            'ECU Re-Maping Solutions' => 'ecu-remaping-solutions.php',
            'Light Commercial Tuning' => 'light-commercial-tuning.php',
            'Motorcycle Dyno Tuning' => 'motorcycle-dyno-tuning.php',
            'Tractor ECU Re-Maping' => 'tractor-ecu-remaping.php',
            'DSG Tuning/Re-Maping' => 'dsg-tuning.php',
            'Pops & Bangs (Crackle Map / Over-Run Map)' => 'pops-and-bangs.php',
            'Launch Control' => 'launch-control.php',
            'UnBrick /ECU Recovery' => 'unbrick-ecu-recovery.php',
        ],
        'Search ECU Info' => 'search-ECU-info.php',
        'Shop' => 'shop.php',
        'Data Trouble Codes' => 'data-trouble-codes.php',
        'Original Files' => 'original-files.php',
        'Damos Files' => 'damos-files.php',
        'About' => 'about.php',
        'Contact' => 'contact.php'
    ];

    // Get the current page title
    $current_title = isset($pageTitles[$activePage]) ? $pageTitles[$activePage] : 'Page Not Found';

    // Build the breadcrumb path
    $breadcrumb = ['Home' => 'index.php'];
    $found = false;

    // Check for dropdown items
    foreach ($navbar as $nav_name => $nav_link) {
        if (is_array($nav_link)) {
            if (in_array($activePage, $nav_link)) {
                $breadcrumb['Services'] = 'javascript:void(0)'; // Placeholder URL
                $breadcrumb[$current_title] = $activePage;
                $found = true;
                break;
            }
        } else {
            if ($activePage == basename($nav_link)) {
                $breadcrumb[$nav_name] = $nav_link;
                $found = true;
                break;
            }
        }
    }

    // If not found in dropdown, just add current page title after Home
    if (!$found) {
        $breadcrumb[$current_title] = $activePage;
    }
?>

<section class="hero_sec-2 <?= $hero_banner ?>">
    <div class="container h-100 w-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="sec-heading"><?= htmlspecialchars($hero_title) ?></h1>
                <p class="sec-head-text"><?= htmlspecialchars($hero_desc) ?></p>
                <span class="page_loc">
                    <?php foreach ($breadcrumb as $name => $link): ?>
                        <a href="<?= htmlspecialchars($link) ?>" class="<?= $name === $current_title ? 'page_active' : 'page_home' ?>"><?= htmlspecialchars($name) ?></a>
                        <?php if ($name !== $current_title): ?> / <?php endif; ?>
                    <?php endforeach; ?>
                </span>
            </div>
        </div>
    </div>
</section>
