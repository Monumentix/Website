<?php
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\NavBar;
?>

<?php include('header.php') ;?>

<?php $this->beginBody() ?>

<div class="wrap">
  <?php include('menu.php') ;?>
    <div class="container-fluid no-padding">
      <?= Alert::widget() ?>
      <?= $content ?>
    </div>
</div>

<?php include('footer.php') ;?>
