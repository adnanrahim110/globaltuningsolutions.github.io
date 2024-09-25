<?php
// Array to store dynamic content for each page
$pageContent = [
    'ecu-remaping.php' => [
        'title' => "Why Choose Global Tuning Solutions for ECU Remaping",
        'intro' => "Here at Zentune, we do not just have ECU Remapping on offer; we provide a comprehensive list of services paired with state-of-the-art software that will ensure your vehicle is able to perform at its absolute best. Here is why you should put your trust in us:",

        'points' => [
            "Experts:|Our team has extensive experience in ECU remapping, ensuring optimal performance for your vehicle.",
            "Advanced Technology:|We use cutting-edge tools and techniques for precise ECU adjustments.",
            "Customized Solutions:|Our remapping services are tailored to meet the specific needs of your vehicle."
        ]
    ],
    'ecu-remaping-solutions.php' => [
        'title' => "Speed Limiter Removal",
        'intro' => "Many vehicles have a speed limiter applied from factory or by a third party at a later date. The limiter is often applied as a gentleman’s agreement amongst car manufactures or by customer choice e.g. Most Toyota Hilux Ford Rangers have a factory set speed limiter of 100 MPH / 160 KMH. Most Euro cars will have limits of 155 MPH / 250 KMH.",
        'points' => [
            "&#9881; |By adjustment of the ECU data we are able to successfully remove the speed limiter from most vehicles. Most speed limiters can be removed by visiting one of our authorised agents. Some vehicles with complex speed limiters can only be removed at our HQ in Sydney Australia. Please contact us with your vehicle details and location for further information. ",
            "&#9881; |We also offer a Speed limiter application or adjustment service, fleet discount available. Please contact us with your requirements for further information. "
        ]
    ],
    // Add content for other pages similarly
    'light-commercial-tuning.php' => [
        'title' => "Reignite Your Love Of Driving",
        'intro' => "",
        'points' => [
            "&#9881; |Most cars are relatively fun to drive. For the first three, six or even twelve months of ownership
                you'll find it relatively easy to overlook the tiny niggles that suck the joy out of motoring,
                but people who love their cars will always find things that they want to improve on.",
            "&#9881; |It could be that your car feels sluggish when pulling away from a standing start, or that you've
                noticed a flat spot at 3,000rpm that you can't ignore. It may even be something much more prosaic
                like poor fuel efficiency that's cutting into your monthly budget.",
        ]
    ],
    'motorcycle-dyno-tuning.php' => [
        'title' => "Is Motorcycle Tuning & ECU Remapping Safe?",
        'intro' => "",
        'points' => [
            "|10 years ago, remapping was something of a dark art; practised by petrol heads huddled in their bedrooms or a poorly-lit garage on a run down industrial estate. But the industry has changed a lot over the last decade. The techniques we used are increasingly understood - and valued - by the mainstream and the overwhelming majority of people now know that ECU remaps are a perfectly safe and reliable way to upgrade a motorcycle's performance.",
            "|We take great pride in our ability to boost performance without putting any strain on key components, and we never write remaps that' push your engine.",
            "|If you're really worried about the potential risks of a remap, you'll be pleased to hear that we always store your bike's default maps on our servers, so that you can roll your ECU back to the factory-default settings whenever you want."
        ]
    ],
    'tractor-ecu-remaping.php' => [
        'title' => "Fast, Effective & Cost Efficient Remapping Services",
        'intro' => "When we remap a tractor, the increase in performance and work efficiency is immediate. Customers have also reported improvements in fuel efficiency and we're often told that remapping a tractor has made it more tractable with improved drivability.",
        'points' => [
            "|This is achieved by improving throttle response, increasing power and smoothing out torque curves.",
            "|Although all of our maps are programmed by technicians working out of our HQ in Sydney, Australia, our tractor remapping services are fully mobile. We have agents around the world that will drive out to you with there equipment, plugÂ  into your tractor's ECU and write or transfer a map that's designed to transform your vehicle's performance.",
            "|Maps are often tweaked and optimised on site to ensure that you see the best possible performance gains, and ensure that your tractor is performing to specification before leaving you to enjoy your upgraded machine.",
            "|A hassle-free process designed to help you unlock your equipments' full potential."
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
                    <h1 class="sec-heading"><?= htmlspecialchars($content['title']) ?>?</h1>
                    <p><?php echo $content['intro']; ?></p>
                    <ul>
                        <?php foreach ($content['points'] as $point):
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
