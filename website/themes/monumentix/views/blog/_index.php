<?php
use yii\helpers\Url;
use kartik\icons\Icon;

/* @var $this yii\web\View */
$this->title = 'Blogs';
?>
<div class="row">
  <div class="col-sm-12">
    <h2 class="blog-title">
        <a href="<?= Url::to(['blog/view', 'id' => $model->id, 'slug'=>$model->slug])?> "> <?= $model->title ?></a>
    </h2>
  </div>
  <div class="col-sm-12">
    <p class="time">
      <?=Icon::show('clock-o');?>   <?= Yii::t('app','Published on').' '.date('M j, Y', $model->created_at) ?> - <?=$model->getAuthorName(); ?> </p>
  </div>
  <div class="col-sm-4">
    <img class="center-block img img-thumbnail img-blog-preview " src="/<?=$model->blog_image ?> ">
  </div>
  <div class="col-sm-8">
    <p><?= $model->summary ?></p>
    <a class="btn btn-xs btn-success shadow " href="<?= Url::to(['blog/view', 'id' => $model->id, 'slug'=>$model->slug]) ?>">

      <?= yii::t('app','Read more'); ?>
      &nbsp;
      <?=Icon::show('arrow-circle-right');?>

    </a>
  </div>
</div>
<hr class="blog-devider">
