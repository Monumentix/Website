<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Blog');

$this->params['breadcrumbs'][] = Yii::t('app', 'Blog');
?>
<div class="blog-index">
    <h1>
        <?= Html::encode($this->title) ?>
        <span class="small"> - <?= Yii::t('app', 'Latest news and information') ?></span>
    </h1>
    <hr class="top">

    <div class="row">
        <div class="col-md-9">
        <?= ListView::widget([
            'summary' => false,
            'dataProvider' => $dataProvider,
            'emptyText' => Yii::t('app', 'We haven\'t created any blogs yet.'),
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {
                return $this->render('_index', ['model' => $model]);
            },
        ]) ?>
        </div>
        <div class="col-md-3">
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
