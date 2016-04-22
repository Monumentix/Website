<?php
namespace frontend\components;

use Yii;
use yii\web\NotFoundHttpException;
use yii\web\MethodNotAllowedHttpException;

use yii\base\Widget;
use yii\helpers\Html;

use frontend\models\Blog;
use frontend\models\BlogSearch;


class BlogPostWidget extends Widget{

  public $blogPost ;
  public $postCount ;

  public function init(){
    parent::init();

    if($this->postCount === null){
      $this->postCount = 1;
    }




  }//end init

  public function run(){

    $blogs = $this->getLatestPost();

    return $this->render('Blog/latestFooter.php', [
        'model' => $blogs,
    ]);

  }

  private function getLatestPost(){
    $published = true;

    $searchModel = new BlogSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $this->postCount, $published);

    $blogs=$dataProvider->getModels();

    return $blogs;
  }


}//end class
