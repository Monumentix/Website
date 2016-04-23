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

  public $action;

  public function init(){
    parent::init();

    if($this->postCount === null){
      $this->postCount = 1;
    }

    if($this->action === null){
      $this->action = 'latestPosts';
    }



  }//end init

  public function run(){

    switch($this->action){
      case 'latestPosts':
        $blogs = $this->getLatestPost();

          return $this->render('Blog/latestFooter.php', [
              'model' => $blogs,
          ]);

        break;

      case 'latestTitles':
        $blogs = $this->getLatestTitles();

          return $this->render('Blog/latestTitles.php', [
              'model' => $blogs,
          ]);

        break;

      case 'archiveListing':
        $blogs = $this->getArchiveListing();

        return $this->render('Blog/archiveListing.php', [
            'model' => $blogs,
        ]);

      default:
        break;
    }



  }




  private function getLatestPost(){
    $published = true;

    $searchModel = new BlogSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $this->postCount, $published);

    $blogs=$dataProvider->getModels();

    return $blogs;
  }

  private function getLatestTitles(){
    $blogs =BlogSearch::getLatestTitles();
    return $blogs;
  }


  private function getArchiveListing(){
    $published = true;

    $searchModel = new BlogSearch();
    $dataProvider = $searchModel->archive(Yii::$app->request->queryParams, $this->postCount, $published);

    $blogs=$dataProvider->getModels();

    return $blogs;
  }

}//end class
