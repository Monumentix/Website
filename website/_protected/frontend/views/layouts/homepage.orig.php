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
            $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/#aboutme']];
            $menuItems[] = ['label' => Yii::t('app', 'Contact'), 'url' => ['/#contactme']];
            $menuItems[] = ['label' => Yii::t('app', 'Blog'), 'url' => ['/article/index']];

            /*

            // we do not need to display Article/index, About and Contact pages to editor+ roles
            if (!Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Blog'), 'url' => ['/article/index']];
                $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/#aboutme']];
                $menuItems[] = ['label' => Yii::t('app', 'Contact'), 'url' => ['/#contactme']];
            }


            // display Article admin page to editor+ roles
            if (Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Articles'), 'url' => ['/article/admin']];
            }
            */

            /*
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
            */




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
          <div class="col-lg-2 col-sm-6">
            <h4>Quick Links:</h4>
            <ul>
              <li> <a href="">About Me</a></li>
              <li> <a href="">Contact Me</a></li>
              <li> <a href="">Project Spotlight</a></li>
              <li> <a href="">Blog</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-6">
            <h4>Demo My Work</h4>
            <p>Interact with a demo application.</p>
            <a class="btn btn-sm btn-success" href="#"><span class="glyphicon glyphicon-warning"></span> Demo & Samples</a>
          </div>
          <div class="col-lg-6 col-sm-6">
            <h4>Latest Blog Post:</h4>
            <p><strong>Our Blog Post Title Goes Here </strong> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
          
          </div>
          <div class="col-lg-2 col-sm-6">
            <h4>Get In Touch:</h4>
            <address>
              <strong>Monumentix / Brian Ridsdale </strong><br>
              15 Colonial Terrace <br>
              Pompton Plains, NJ 07444<br>
              <abb title="Phone">P:</abbr>&nbsp;(973)671-8326
            </address>
          </div>
        </div>
        <!-- LOWER third -->

        <hr>

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
