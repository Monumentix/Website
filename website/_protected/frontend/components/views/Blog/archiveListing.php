<?php
use yii\helpers\Url;
use kartik\icons\Icon;
?>

<div class="panel panel-monumentix">
  <div class="panel-heading">
    <h3 class="panel-title">
      Archive
    </h3>
  </div>
  <div class="panel-body text-left">
    <p>
      <?php foreach($model as $post) :  ?>
        <li class="archiveMonths">
          <?php print_r($post->postMonth);?>
        </li>
      <?php endforeach; ?>
    </p>
  </div>
</div>
