<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Blogs';
?>

    <h2>
        <a href="<?= Url::to(['blog/view', 'id' => $model->id, 'slug'=>$model->slug])?> "> <?= $model->title ?></a>
    </h2>

    <p class="time"><span class="glyphicon glyphicon-time"></span>
        <?= Yii::t('app','Published on').' '.date('F j, Y, g:i a', $model->created_at) ?></p>

    <p><?= $model->summary ?></p>

    <a class="btn btn-primary" href="<?= Url::to(['blog/view', 'id' => $model->id, 'slug'=>$model->slug])?>" >
        <?= yii::t('app','Read more'); ?><span class="glyphicon glyphicon-chevron-right"></span>
    </a>

    <hr class="blog-devider">
