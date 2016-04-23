<?php
use yii\helpers\Url;
use kartik\icons\Icon;
use yii\helpers\StringHelper;
?>

<?php foreach($model as $post) :  ?>
  <h4>Latest Blog Post: </h4>
  <div class="row">
    <div class="col-md-12">

      <!--<img class="center-block img img-thumbnail img-blog-footer " src="/<?=$post->blog_image ?> "> -->

      <span class="blogTitle"> <?=$post->title; ?> </span> - <?= $post->authorName ?> - <?= date('m/j/y', $post->created_at) ?>
      <p>
        <?= StringHelper::truncate($post->summary,420,'...',null,true); ?>
        <a class="btn btn-xs btn-success shadow  " href="<?= Url::to(['blog/view', 'id' => $post->id, 'slug'=>$post->slug]) ?>">
          <?= yii::t('app','Read more'); ?>
          &nbsp;
          <?=Icon::show('arrow-circle-right');?>
        </a>
      </p>

    </div>
  </div>
<?php endforeach; ?>
