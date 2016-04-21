<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

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
