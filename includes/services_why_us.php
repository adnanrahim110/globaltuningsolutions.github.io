<?php
// Array to store dynamic content for each page
$pageContent = [
    'ecu-remaping.php' => [
        'title' => "for your ECU Ramp",
        'intro' => "Here at Zentune, we do not just have ECU Remapping on offer; we provide a comprehensive list of services paired with state-of-the-art software that will ensure your vehicle is able to perform at its absolute best. Here is why you should put your trust in us:",

        'points' => [
            "Experts:|Our team has extensive experience in ECU remapping, ensuring optimal performance for your vehicle.",
            "Advanced Technology:|We use cutting-edge tools and techniques for precise ECU adjustments.",
            "Customized Solutions:|Our remapping services are tailored to meet the specific needs of your vehicle."
        ]
    ],
    'ecu-remaping-solutions.php' => [
        'intro' => "Intro content for ECU Remapping Solutions...",
        'points' => [
            "Comprehensive Services:|We offer a wide range of ECU remapping solutions.",
            "Safety First:|All our solutions prioritize safety and performance.",
            "Proven Results:|Our solutions have been tested and proven to enhance vehicle performance."
        ]
    ],
    // Add content for other pages similarly
    'light-commercial-tuning.php' => [
        'intro' => "Intro content for Light Commercial Tuning...",
        'points' => [
            "Expertise:|We specialize in tuning light commercial vehicles for improved performance.",
            "Efficiency:|Our tuning services are designed to maximize fuel efficiency and power.",
            "Tailored Solutions:|We provide customized tuning solutions for light commercial vehicles."
        ]
    ],
    'motorcycle-dyno-tuning.php' => [
        'intro' => "Intro content for Motorcycle Dyno Tuning...",
        'points' => [
            "Precision Tuning:|Our dyno tuning services offer precise adjustments for motorcycles.",
            "Performance Gains:|Experience significant performance improvements with our tuning.",
            "Experienced Technicians:|Our team has the expertise to tune all types of motorcycles."
        ]
    ],
    'tractor-ecu-remaping.php' => [
        'intro' => "Intro content for Tractor ECU Remapping...",
        'points' => [
            "Specialized Services:|We offer ECU remapping services specifically for tractors.",
            "Increased Efficiency:|Our remapping improves fuel efficiency and power output.",
            "Durability:|We ensure that our remapping enhances the longevity of your tractor."
        ]
    ],
    'dsg-tuning.php' => [
        'intro' => "Intro content for DSG Tuning...",
        'points' => [
            "Expert Tuning:|Our DSG tuning services offer precise adjustments for smoother shifting.",
            "Enhanced Performance:|Experience improved performance and responsiveness.",
            "Customized Solutions:|We tailor our tuning services to meet your specific needs."
        ]
    ],
    'pops-and-bangs.php' => [
        'intro' => "Intro content for Pops and Bangs...",
        'points' => [
            "Unique Experience:|Our pops and bangs tuning creates a unique exhaust sound.",
            "Customization:|We offer customizable pops and bangs to match your preferences.",
            "Expert Technicians:|Our team ensures safe and effective tuning."
        ]
    ],
    'launch-control.php' => [
        'intro' => "Intro content for Launch Control...",
        'points' => [
            "Performance Boost:|Our launch control tuning offers enhanced acceleration.",
            "Precision Tuning:|We provide precise adjustments for optimal launch performance.",
            "Safety:|Our tuning services prioritize safety while improving performance."
        ]
    ],
    'unbrick-ecu-recovery.php' => [
        'intro' => "Intro content for Unbrick ECU Recovery...",
        'points' => [
            "Recovery Expertise:|We specialize in recovering bricked ECUs safely.",
            "Advanced Tools:|We use state-of-the-art tools for ECU recovery.",
            "Trusted Services:|Our recovery services are trusted by many satisfied clients."
        ]
    ]
];

// Get the current page name
$currentPage = basename($_SERVER['PHP_SELF']);

// Retrieve the content for the current page
$content = $pageContent[$currentPage];
?>
<style>
    .wu-text .sec-heading {
        font-size: 25px;
    }
     ul {
        padding-left: 0;
     }
     li {
        font-size: 17px;
        color: #ccc;
     }

     li strong {
        color: #fff;
     }
</style>
<section class="wu-sec">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="wu-img">
                    <img src="assets/images/why-us.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wu-text">
                    <h1 class="sec-heading">Why Choose Global Tuning Solutions <?= htmlspecialchars($content['title']) ?>?</h1>
                    <p><?php echo $content['intro']; ?></p>
                    <ul>
                        <?php foreach ($content['points'] as $point) : 
                            list($strongText, $description) = explode('|', $point);
                        ?>
                            <li><strong><?php echo $strongText; ?></strong> <?php echo $description; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
