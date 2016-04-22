<?php
use yii\helpers\Url; 
use kartik\icons\Icon;
?>

<?php foreach($model as $post) :  ?>
  <h4>Latest Blog Post: </h4>
  <p><strong> <?=$post->title; ?> </strong> - <?= $post->summary; ?> </p>
  <div class="row">
      <div class="col-xs-6 text-left">
        <p>
          <span class="time">
            <span class="glyphicon glyphicon-time"></span>
            <?= Yii::t('app','Published').' '.date('M j, Y', $post->created_at) ?>
          </span>
          - <?= $post->authorName ?>
        </p>
      </div>
      <div class="col-xs-6 text-right">
        <a class="btn btn-xs btn-success shadow " href="<?= Url::to(['blog/view', 'id' => $post->id, 'slug'=>$post->slug]) ?>">
          <?= yii::t('app','Read more'); ?>
          &nbsp;
          <?=Icon::show('arrow-circle-right');?>
        </a>
      </div>
  </div>


  <div class="text-right">

  </div>
<?php endforeach; ?>
