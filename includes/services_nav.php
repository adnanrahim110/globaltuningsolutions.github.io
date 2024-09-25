<?php $activePage = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>
<div class="services_nav">
  <ul>
    <li>
      <a class="serv_nav-item <?= $activePage == "ecu-remaping.php" ? 'active' : '' ?>" href="ecu-remaping.php">ECU
        Re-Maping</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "ecu-remaping-solutions.php" ? 'active' : '' ?>"
        href="ecu-remaping-solutions.php">
        ECU Re-Maping Solutions</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "light-commercial-tuning.php" ? 'active' : '' ?>"
        href="light-commercial-tuning.php">Light Commercial
        Tuning</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "motorcycle-dyno-tuning.php" ? 'active' : '' ?>"
        href="motorcycle-dyno-tuning.php">Motorcycle Dyno
        Tuning</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "tractor-ecu-remaping.php" ? 'active' : '' ?>"
        href="tractor-ecu-remaping.php">
        Tractor ECU Re-Maping</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "dsg-tuning.php" ? 'active' : '' ?>" href="dsg-tuning.php">DSG Tuning /
        Re-Maping</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "pops-and-bangs.php" ? 'active' : '' ?>" href="pops-and-bangs.php">
        Pops & Bangs (Crackle Map / Over-Run Map)</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "launch-control.php" ? 'active' : '' ?>"
        href="launch-control.php">Launch
        Control</a>
    </li>
    <li>
      <a class="serv_nav-item <?= $activePage == "unbrick-ecu-recovery.php" ? 'active' : '' ?>"
        href="unbrick-ecu-recovery.php">
        UnBrick /ECU Recovery</a>
    </li>
  </ul>
</div>
