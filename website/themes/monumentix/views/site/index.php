<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use frontend\widgets\Alert;
use kartik\icons\Icon;


/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>
<div class="site-index">

<div id="herobanner" class="container-fluid">
  <div class="container">

    <?= Alert::widget() ?>

    <div class="jumbotron ">

        <img class="center-block img-circle img-responsive img-coder-logo-large" src="<?=$this->theme->baseUrl?>/images/coder.jpg">


        <h1>Monumentix - Brian Ridsdale</h1>
        <p class="lead"><?=Icon::show('cloud');?> Full Stack Developer <?=Icon::show('cloud');?></span>
          |
          <strong><?=Icon::show('code');?></strong> Programmer  <strong><?=Icon::show('code');?></strong>  </p>
        <p>
          <a class="btn btn-lg btn-primary shadow" href="#about"><?=Icon::show('user');?> Know me Better</a>
          &nbsp; &nbsp;
          <a class="btn btn-lg btn-success shadow" href="#contact"><?=Icon::show('thumbs-up');?> Hire Me</a>
        </p>
        <div id="about"></div>
    </div>
  </div>
</div>


<div id="aboutme" class="container-fluid">
  <div class="container"
    <div class="row">
        <div class="col-sm-8">
            <h3><?=Icon::show('home');?>Monumentix / Brian Ridsdale</h3>
            <img class="pull-left img-circle img-responsive img-thumbnail img-coder-logo-small" src="<?=$this->theme->baseUrl?>/images/coder.jpg" style="width:120px;">
            <p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
        </div>

        <div class="col-sm-4">
            <h3><?=Icon::show('university');?>Experience</h3>
            <ul>
              <li>2001 - Complete Schooling <p>Small text about school</p></li>
              <li>2002 - 2009 NJ Transit <p>Noteable projects include N-Tier Ticket Inventory Application</p></li>
              <li>2009 - Freelance <p>Noteable projects include Searchlight Comics Cloud Based Infastructre</li>
            <ul>
            <p>Current personal / company goals for the foresable future things we are looking foward to, some sample bs random text</p>
        </div>


    </div>
  </div>
</div>

<div id="whatido" class="container-fluid">
    <div class="container">
        <div id="" class="row">
            <div class="col-lg-12">
                <h3 class="text-center"><?=Icon::show('cloud');?> &nbsp; What I do &nbsp; <?=Icon::show('cloud');?> </h3>
                <hr>
                <blockquote class="blockquote">
                  <p>The term full-stack means developers who are comfortable working with both back-end and front-end technologies.</p>
                  <p>To be more specific, it means that the developer can work with databases, PHP, HTML, CSS, JavaScript and everything in between, also, venturing as far as converting Photoshop designs to front-end code.</p>
                  <p>A full-stack developer doesn’t need to master all of the areas and technologies he needs to work it, because that just makes it nearly impossible, he just needs to be comfortable working with those technologies, and that’s a lot too. </p>
                  <footer>George Fekete - <cite title="Being A Full Stack Developer"><a target="_blank" href="http://www.sitepoint.com/full-stack-developer/">Being a Full Stack Developer</a></cite></footer>
                </blockquote>

                <P class="text-center">While this quote doesnt mention all the layers in many current cloud based technology stacks, but being comfortable with all the pieces that allow an application to run gives the devloper freedom to find an ideal solution for each unique challenge presented. <p>
                <hr>
            </div>
            <hr>
            <div class="col-sm-6">
              <img src="">
              <h3><?=Icon::show('server');?> Server / Networking / Hosting Enviroment</h3>
              <p>Wanna launch a website?  No problem. Wait it needs auto scaling frontend servers seperated from your backend application servers.  No problem.  More you say, a seperate database cluster and reddis caching as well.
                And you need notification of all this stuff sent to your phone. Sure i can do that.</p>
            </div>
            <div class="col-sm-6">
              <img src="">
              <h3><?=Icon::show('database');?> Data Modeling and Business Logic</h3>
              <p>If you dont measure it, you cant manage it.  With so much available data in our applications and outside systems it can get frusturating keeping track of it all.  I can help you manage all that data through implementation of buisness logic and rules alongside normalized relational data models, viewable through queryable web forms and reports. </p>
            </div>
            <div class="col-sm-6">
              <img src="">
              <h3><?=Icon::show('desktop');?> User Interface / User Experience</h3>
              <p>From readable layouts, to meaningful error messages, to minamizing button clicks and application steps, i strive to ensure the final product always remains as easy as it can be for the application user. </p>
            </div>
            <div class="col-sm-6">
              <img src="">
              <h3><?=Icon::show('code');?> AND i write code too!</h3>
              <p>While i write code, just as big a part is reading code.  Understanding external API's and MVC frameworks along with the affect they have on core business logic and its data has also become critical in our digital world. </p>
            </div>
        </div>

    </div>
</div>


  <div id="techiuse" class="container-fluid ">
    <div class="container">
        <div id="" class="row">
            <div class="col-lg-12">
                <h3 class="text-center"><?=Icon::show('server');?> Technology I Use</h3>
                <div id="" class="row center-block">

                  <div class="col-xs-4 col-sm-4">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <img src="<?=$this->theme->baseUrl?>/images/aws_logo_web.png" class="center-block img img-responsive ">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <img src="<?=$this->theme->baseUrl?>/images/github.png" class="center-block img img-responsive ">
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-4 col-sm-4">
                    <div class="row">
                      <div class="col-xs-6 col-sm-8">
                        <img src="<?=$this->theme->baseUrl?>/images/Tux.png" class="center-block img img-responsive ">
                      </div>
                      <div class="col-xs-6 col-sm-4">
                        <img src="<?=$this->theme->baseUrl?>/images/php-logo.png" class="center-block img img-responsive ">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6 col-sm-8">
                        <img src="<?=$this->theme->baseUrl?>/images/apache-logo.png" class="center-block img img-responsive ">
                      </div>
                      <div class="col-xs-6 col-sm-4">
                        <img src="<?=$this->theme->baseUrl?>/images/MySQL.png" class="center-block img img-responsive ">
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-4 col-sm-4">
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-2">

                        <img src="<?=$this->theme->baseUrl?>/images/yii-logo.png" class="center-block img img-responsive ">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-2">
                        <img src="<?=$this->theme->baseUrl?>/images/Magento-logo.png" class="center-block img img-responsive ">
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div id="showcase"></div>
        </div>
      </div>
  </div>





  <div id="spotlight" class="container-fluid ">
    <div class="container">
      <div id="" class="row">
          <div class="col-lg-12">
              <h3 class="text-center">Spotlight Project : <small class="lead">Scalable Cloud-Based E-Commerce Solution</small></h3>
              <div class="row spotlightwrapper">
                <div class="col-sm-6">

                  <div class="row">
                    <div class="col-sm-3 text-right">
                      <br>
                      <?=Icon::show('cloud',['class'=>'fa-5x']);?>
                    </div>
                    <div class="col-sm-8">
                      <h3>Cloud Based Scalable Infastructre</h3>
                      <p>A scalable and cloud based option centered around Amazons AWS infastrucre was choosen in part to cost, as well as to the range of services that integrated well with our choosen ecommerce package.  The largest upside has been the ability to use GIT and Cloud Formation templates to deploy/manage our network stack from source code version controlled templates.
                        <a class="pull-right" href="#">...learn more</a>
                      </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3 text-right">
                      <br>
                      <?=Icon::show('github',['class'=>'fa-5x']);?>
                    </div>
                    <div class="col-sm-8">
                      <h3>Open Source Ecommerce Package</h3>
                      <p>When it came time to choose an ecommerce solution while cumbersome and bloated at times, magento does a good job at what it does.  That is provide an open source ecommerce solution with a large supporting community of developers and modules to enhacen and extend the platform.
                        <a class="pull-right" href="#">...learn more</a>
                      </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3 text-right">
                      <br>
                      <?=Icon::show('desktop',['class'=>'fa-5x']);?>
                    </div>
                    <div class="col-sm-8">
                      <h3>Product Management Application</h3>
                      <p>Custom Web Based Buisness Application to  streamline and automate day to day processes that were not feasible or suitable to existing sub-systems.  Initially this Application started life as an data entry for inventory, as well as inventory tracking applcation, but quickly expanded to fill many other roles.
                        <a class="pull-right" href="#">...learn more</a>
                      </p>
                    </div>
                  </div>


                </div>
                <div class="col-sm-6">
                  <img id="searchlightcomics-screenshot" src="<?=$this->theme->baseUrl?>/images/searchlightcomics-screenshot-with-monitor.png" class="center-block img img-responsive ">
                </div>
              </div>

              <br>

              <div class="row">
                <div class="col-sm-4 text-center">
                  <a class="btn btn-lg btn-success shadow" href="#"><span class="glyphicon glyphicon-certificate"></span> Learn how it all works</a>
                </div>
                <div class="col-sm-4 text-center">
                  <a class="btn btn-lg btn-primary shadow" href="#"><span class="glyphicon glyphicon-link"></span> See the storefront</a>
                </div>
                <div class="col-sm-4 text-center">
                  <a class="btn btn-lg btn-warning shadow" href="#"><span class="glyphicon glyphicon-exclamation-sign"></span> Play with some modules</a>
                </div>

              </div>
          </div>
      </div>
    </div>
  </div>




  <div id="blogposts" class="container-fluid ">
    <div class="container">
      <div id="" class="row">
        <div class="col-lg-12">
          <h3 class="text-center">Blog Posts : <small class="lead">Project Updates and Information</small></h3>
          <div id="blogPostsRow" class="row center-block">

            <?= ListView::widget([
                'summary' => false,
                'dataProvider' => $blogDataProvider,
                'emptyText' => Yii::t('app', 'We haven\'t created any Blogs yet.'),
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($blogModel, $key, $index, $widget) {
                    return $this->render('_blog', ['model' => $blogModel]);
                },
              ])
            ?>

          </div> <!--End of row-->

          <div class="row">

            <h5 class="text-center">
            Read more about our projects and technologies were are working with or have worked with.
            <a class="text-right btn btn btn-primary shadow" href="#">

              <?= yii::t('app','My Blog'); ?>
              &nbsp;
              <?=Icon::show('arrow-circle-right');?>
              </a>
          </h5>
          </div> <!--End of row-->
          <div id="contact"></div>
        </div>
      </div>
    </div>
  </div>



  <div id="contactme" class="container-fluid ">
    <div class="container">
      <div id="" class="row">
        <h3 class="text-center">Contact Me</h3>
        <div class="col-lg-8">
          <div id="" class="row bs-component well">
                <p>
                    <?= Yii::t('app', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.'); ?>
                </p>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
          </div>
        </div>

        <div class="col-lg-4 text-center ">
        <img src="<?=$this->theme->baseUrl?>/images/coder.jpg" class="contact-image img-circle img-coder-logo-large img-responsive hidden-xs hidden-sm center-block" alt="">
        <Br>
          <div class="contact-info">
              <p>Brian Ridsdale</p>
                <p>15 Colonial Terrace</p>
                <p>Pompton Plains, NJ 07444</p>
                <p>973-671-8326</p>
            </div>
        </div>

      </div>
    </div>
  </div>








</div>
