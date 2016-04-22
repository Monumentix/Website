<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view">
    <div class="row">



      <div class="col-md-8">


        <h1><?= Html::encode($this->title) ?>
          <div class="pull-right">
          <?php if (Yii::$app->user->can('adminArticle')): ?>
              <?= Html::a(Yii::t('app', 'Back'), ['admin'], ['class' => 'btn btn-warning']) ?>
          <?php endif ?>

          <?php if (Yii::$app->user->can('updateArticle', ['model' => $model])): ?>
              <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
          <?php endif ?>

          <?php if (Yii::$app->user->can('deleteArticle')): ?>
              <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                  'class' => 'btn btn-danger',
                  'data' => [
                      'confirm' => Yii::t('app', 'Are you sure you want to delete this article?'),
                      'method' => 'post',
                  ],
              ]) ?>
          <?php endif ?>

          </div>
        </h1>
        <p>Author: <?=$model->authorName?> - <?= date('M j, Y',$model->created_at) ?> </p>

        <?= $model->content; ?>

        <?php  /* =DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                // [
                //     'label' => Yii::t('app', 'Author'),
                //     'value' => $model->authorName,
                // ],
                'title',
                'summary:ntext',
                'content:html',
                // [
                //     'label' => Yii::t('app', 'Status'),
                //     'value' => $model->statusName,
                // ],
                /*[
                    'label' => Yii::t('app', 'Category'),
                    'value' => $model->categoryName,
                ],*/
              /*  'created_at:dateTime',
                //'updated_at:dateTime',
            ],
        ])  */ ?>
      </div>
      <div class="col-md-4 text-center ">
        <img src="<?=$this->theme->baseUrl?>/images/coder.jpg" class="contact-image img-circle img-coder-logo-large img-responsive center-block" alt="">
        <Br>
        <div class="contact-info">
            <p>Brian Ridsdale</p>
              <p>15 Colonial Terrace</p>
              <p>Pompton Plains, NJ 07444</p>
              <p>973-671-8326</p>
          </div>

          <div class="panel panel-monumentix">
            <div class="panel-heading">
              <h3 class="panel-title">
                Archive
              </h3>
            </div>
            <div class="panel-body">
              <p>um ei ocurreret concludaturque. Vim ut vide etiam ignota, mea in ignota animal. Case utamur tibique at vel. Ei eum tota ornatus </p>
            </div>
            <div class="panel-footer">
              <p class="text-center">Some simple footer data </p>
            </div>

          </div>

          <div class="panel panel-monumentix">
            <div class="panel-heading">
              <h3 class="panel-title">
                Categories
              </h3>
            </div>
            <div class="panel-body">
              <li>Item 1</li>
              <li>Item 1</li>
              <li>Item 1</li>
              <li>Item 1</li>
              <li>Item 1</li>
              <li>Item 1</li>
            </div>
          </div>

        </div>

      </div>
    </div>


</div>
