<?php
use yii\helpers\Url;
use kartik\icons\Icon;
use yii\helpers\StringHelper;
?>

          <div class="col-lg-4">
            <div class="panel panel-default panel-blog">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="<?= Url::to(['blog/view', 'id' => $model->id, 'slug'=>$model->slug]) ?>"><?= $model->title ?></a></h3>
              </div>
              <div class="panel-body">
                <p> <?= StringHelper::truncate($model->summary,420,'...',null,true); ?></p>
                <div class="text-right">
                  <a class="btn btn-xs btn-success shadow " href="<?= Url::to(['blog/view', 'id' => $model->id, 'slug'=>$model->slug]) ?>">

                    <?= yii::t('app','Read more'); ?>
                    &nbsp;
                    <?=Icon::show('arrow-circle-right');?>

                  </a>
                </div>
              </div>
              <div class="panel-footer text-center">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="time"><span class="glyphicon glyphicon-time"></span>
                        <?= Yii::t('app','Published').' '.date('M j, Y', $model->created_at) ?></span>
                  </div>
                  <div class="col-xs-4 text-right">
                    <?= $model->authorName ?>
                  </div>
                  <div class="col-xs-12">
                  AWS, PHP, Cloud, Networking, Magento
                  </div>
                </div>
              </div>
            </div>
          </div>
