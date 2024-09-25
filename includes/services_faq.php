<?php
// Array to store dynamic FAQs for each service page
$faqsContent = [
  'ecu-remaping.php' => [
    [
      'question' => "Is ECU Remapping Safe?",
      'answer' => "When completed by one of our professional partners - yes Remapping is safe. We ensure all adjustments to your ECU through our software are within the tolerance of your vehicle to avoid any risk of damage."
    ],
    [
      'question' => "How long does the Remapping process take?",
      'answer' => "Depending on your vehicle and the amount of customization, the process can typically take up to a few hours. More accurate times can be discussed during consultations."
    ],
    [
      'question' => "Is ECU Remapping Right for You?",
      'answer' => "Whether you are someone who wants to get the most out of your vehicle or you just enjoy being behind the wheel, ECU Remapping is a fantastic investment. For all those modified vehicle owners - this service is a must to get the MOST from your vehicle. If you are considering making further modifications to your vehicle, coordinating this upgrade with one of our ECU Remap Solutions will provide only the best results."
    ],
  ],
  'ecu-remaping-solutions.php' => [
    [
      'question' => "What are the problems?",
      'answer' => "
                  <li>
                    <strong>Major Mechanical Failure:</strong>
                    Some vehicles, predominantly early BMW’s were fitted with metal flaps which were prone for failure, the metal screws holding the flap to the spindle would become loose and enter the combustion chamber causing catastrophic engine damage.
                  </li>
                  <li>
                    <strong>Leaking Manifolds:</strong>
                    Overtime the seals surrounding the flap spindle brakes down and causes pressurized air from the inlet manifold to leak to atmosphere. Loss in boost pressure will cause a vehicle to run rich and can damage other components such as DPF, EGR, etc..
                  </li>
                  <li>
                    <strong>Carbon build up:</strong>
                    Carbon from the EGR system along with oil from the breather system causes carbon to build up on the flaps, this reduces the intake manifold size and can hinder performance.
                  </li>
                  <li>
                    <strong>Electronic actuators:</strong>
                    Modern manifold designs incorporate an electronic actuator which opens and closes the flaps. These actuators can fail, along with the position sensors, this can result in the flaps staying in the closed position and thus hindering performance, along with an engine management light and in some cases limp mode.
                  </li>
                  "
    ],
    [
      'question' => "How do we remove them?",
      'answer' => "The process for removing the flaps depends on the design, in some cases the manifold is unbolted and the flaps physically removed, in other cases where the mechanical status of the flaps are good and the fault is due to an electronic actuator, the actuator function can be disabled and the flaps left in place."
    ],
    [
      'question' => "What are the negatives?",
      'answer' => "In our opinion very little, the reduction in emissions and performance at low engine speeds is almost unnoticeable and would only be relevant if no carbon build up had occurred, due to the fact that carbon build up begins as soon as the vehicle leaves the factory, the removal of the flaps is likely to result in increased performance and efficiency."
    ],
    [
      'question' => "What does it cost?",
      'answer' => "The cost of removal depends on the design of the manifold and flaps, contact us with your vehicle registration and we will be more than happy to offer a quotation."
    ],
  ],
];

// Get the current page name
$currentPage = basename($_SERVER['PHP_SELF']);

// Retrieve the FAQs for the current page
$faqs = $faqsContent[$currentPage] ?? [];
?>

<section class="services-faq">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="sec-heading">FAQs</h1>
        <div class="accordion" id="accordion1">
          <?php foreach ($faqs as $index => $faq): ?>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?>" type="button"
                  data-bs-toggle="collapse" data-bs-target="#faq-<?php echo $index; ?>"
                  aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                  aria-controls="faq-<?php echo $index; ?>">
                  <?php echo $faq['question']; ?>
                </button>
              </h2>
              <div id="faq-<?php echo $index; ?>"
                class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>"
                data-bs-parent="#accordion1">
                <div class="accordion-body">
                  <?php echo $faq['answer']; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
