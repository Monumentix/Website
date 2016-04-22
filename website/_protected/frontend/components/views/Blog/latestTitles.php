<?php
use yii\helpers\Url;
use kartik\icons\Icon;
?>
<div class="panel panel-monumentix">
  <div class="panel-heading">
    <h3 class="panel-title">
      Recent Posts
    </h3>
  </div>
  <div class="panel-body">
    <p>
      <?php foreach($model as $post) :  ?>
        <li class="recentTitles">
            <a class="" href="<?= Url::to(['blog/view', 'id' => $post->id, 'slug'=>$post->slug]) ?>">
              <?=$post->title; ?>
            </a>
        </li>
      <?php endforeach; ?>
    </p>
  </div>
</div>
