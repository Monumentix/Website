<?php
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href='https://fonts.googleapis.com/css?family=Fjalla+One|Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php $this->beginBody() ?>


    <div class="wrap">

        <?php
            NavBar::begin([
                'brandLabel' => Yii::t('app', Yii::$app->name),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);

            // everyone can see Home page
            $menuItems[] = ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']];




            // we do not need to display Article/index, About and Contact pages to editor+ roles
            if (!Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Articles'), 'url' => ['/article/index']];
                $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']];
                $menuItems[] = ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']];
            }

            // display Article admin page to editor+ roles
            if (Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Articles'), 'url' => ['/article/admin']];
            }

            // display Signup and Login pages to guests of the site
            if (Yii::$app->user->isGuest)
            {
                $menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
                $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
            }
            // display Logout to all logged in users
            else
            {
                $menuItems[] = [
                    'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }



            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container-fluid no-padding">
        <?= Alert::widget() ?>

        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
      <div class="container">

        <!-- LOWER third -->
        <div class="row">
          <div class="col-lg-3">
            <h4>Heading</h4>
          </div>
          <div class="col-lg-6">
            <h4>Heading</h4>
          </div>
          <div class="col-lg-3">
            <h4>Heading</h4>
          </div>
        </div>
        <!-- LOWER third -->

        <!-- copywright -->
        <div class="row">
          <div class="col-lg-6">
            <p class="text-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
          </div>
          <div class="col-lg-6">
            <p class="text-right"><?= Yii::powered() ?></p>
          </div>
        </div>
        <!-- copywright -->


      </div>

    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
