<?php $title = "Trajet"; ?>



<?php ob_start(); ?>

        <!-- Main -->
        <main class="container-lg py-5 col-lg-4 m-vh-80">

        <?php if (isset($_SESSION['ERROR_BOOKING-TRAVEL'])): ?>
          <p class='text-center alert alert-danger mt-2' role='alert'><?= $_SESSION['ERROR_BOOKING-TRAVEL'] ?></p>
        <?php endif ?>
        <?php if (isset($_SESSION['SUCCESS_BOOKING-TRAVEL'])): ?>
          <p class='text-center alert alert-success mt-2' role='alert'><?= $_SESSION['SUCCESS_BOOKING-TRAVEL'] ?></p>
        <?php endif ?>


<!-- <a href="./index.php?action=travel&id=39">test</a> -->
<h1></h1>
<div class="vtl">
  <div class="event">
    <p class="date">Départ</p>
    <p class="txt"><?= $travel["start"] ?></p>
  </div>
  <?php
//   var_dump($travel["list_steps"]);
  $steps= json_decode($travel["list_steps"]);
  foreach ($steps as $key => $step) {
    if ($step != $travel["start"] && $step != $travel["destination"] ){
        echo '<div class="event">
        <p class="date">Étape '.$key.'</p>
        <p class="txt">'.$step.'</p>
      </div>';
    }
  } ?>
  <div class="event">
    <p class="date">Arrivée</p>
    <p class="txt"><?= $travel["destination"] ?></p>
  </div>

</div>
<a href="../index.php?action=booking&id=<?=$travel['travel_id'] ?>" class="btn btn-primary me-2">Réservez</a>

</main>

<?php $content = ob_get_clean(); ?>


<?php require('base.php') ?>