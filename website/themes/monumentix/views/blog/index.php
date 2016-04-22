<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Blog');

$this->params['breadcrumbs'][] = Yii::t('app', 'Articles');
?>
<div class="blog-index">
    <h1>
        <?= Html::encode($this->title) ?>
        <span class="small"> - <?= Yii::t('app', 'Latest news and information') ?></span>
    </h1>
    <hr class="top">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
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
        <div class="col-md-1">

        </div>
    </div>

    <hr class="top">


</div>
