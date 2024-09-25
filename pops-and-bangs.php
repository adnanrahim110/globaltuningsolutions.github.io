<?php
$title = "Pops & Bangs (Crackle Map / Over-Run Map)";
$hero_banner = "service_page";
$hero_title = "Pops & Bangs (Crackle Map / Over-Run Map)";
$hero_desc = ""
  ?>

<?php include "includes/head.php"; ?>

<body>
  <?php include "includes/navbar.php"; ?>
  <main>
    <?php include "includes/hero_sec.php"; ?>
    <section class="service_detail-sec">
      <div class="container">
        <div class="row flex-sm-row-reverse flex-md-row">
          <div class="col-12 col-md-3 col-lg-3">
            <?php include "includes/services_nav.php"; ?>
          </div>
          <div class="col-12 col-md-7 col-lg-8">
            <div class="service_details-wrapper">
              <div class="serv_box box_4">
                <h1 class="sec-heading text-sec">Pops & Bangs (Crackle Map / Over-Run Map)</h1>
                <p>
                  This feature can be programmed into the ECU on some petrol vehicles which results in a pop and bang or
                  crackle noise coming from the exhaust system during engine deceleration. Many manufacturers already
                  implement such a feature from factory on some performance models. The feature offers no performance
                  advantages but does offer a sportier feel and noise.
                </p>
                <p>
                  Normally during engine deceleration the injectors are switched off to prevent fuel from entering the
                  combustion chamber. When applying a pop and bang patch to an ECU we request the injectors to stay open
                  for a short period of time after the throttle plate has closed. The spark timing maps are then
                  adjusted so that the fuel is ignited substantially after TDC (Top Dead Centre). This results in fuel
                  igniting during the exhaust stroke and creating small explosions within the exhaust system. These
                  small explosions are what create the popping and banging noise and in some cases small flames can be
                  seen exiting from the exhaust tips.
                </p>
                <p class="notice">
                  Warning: This feature should only be implemented onto vehicles which have an uprated exhaust system
                  with decat or metallic structured sports cat.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include "includes/contact_form.php"; ?>
  </main>
  <?php include "includes/footer.php"; ?>

