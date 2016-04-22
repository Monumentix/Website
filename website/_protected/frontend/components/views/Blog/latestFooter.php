<?php use yii\helpers\Url; ?>

<?php foreach($model as $post) :  ?>
  <h4>Latest Blog Post: </h4>
  <p><strong> <?=$post->title; ?> </strong> - <?= $post->summary; ?> </p>
  <div class="text-right">
    <a class="btn btn-xs btn-success shadow " href=<?= Url::to(['blog/view', 'id' => $post->id]) ?>>
        <?= yii::t('app','Read more'); ?><span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
<?php endforeach; ?>
