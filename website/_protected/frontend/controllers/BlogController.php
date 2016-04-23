<?php
namespace frontend\controllers;

use frontend\models\Blog;
use frontend\models\BlogSearch;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\web\MethodNotAllowedHttpException;
use Yii;


/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends FrontendController
{
    /**
     * Lists all Blog models.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        /**
         * How many Blogs we want to display per page.
         * @var integer
         */
        $pageSize = 3;

        /**
         * Blogs have to be published.
         * @var boolean
         */
        $published = true;

        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $pageSize, $published);

        $tags = BlogSearch::getTags();

        return $this->render('index', [
            'tags'=>$tags,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     *
     * @param  integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @return mixed
     */
    public function actionCreate()
    {
      $model = new Blog();
      $model->user_id = Yii::$app->user->id;

      if($model->load(Yii::$app->request->post())){
        $model->image = UploadedFile::getInstance($model,'image');


        if($model->validate()){
          // store the source file name

            if($model->image != null ){
              $strUniqueFilename = 'uploads/blog/'. Yii::$app->security->generateRandomString().".{$model->image->extension}";
              $model->image->saveAs($strUniqueFilename);
              $model->blog_image=$strUniqueFilename;
            }

            if($model->save()){
              return $this->redirect(['view', 'id' => $model->id]);
            }else{
              //there was an error create some kind of alert, and
              Yii::app()->user->setFlash('error',"There was an issue saving your blog, try again maybe?");
              return $this->redirect(['index']);
            }
        }

      }else{

        return $this->render('create', [
          'model' => $model,
          ]);

      }

        /*
        $model = new Blog();
        $model->user_id = Yii::$app->user->id;
        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        else
        {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
        */


    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param  integer $id
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->user->can('updateBlog', ['model' => $model]))
        {

            if($model->load(Yii::$app->request->post())){
              $model->image = UploadedFile::getInstance($model,'image');

              if($model->validate()){
                // store the source file name
                  if($model->imageDelete == true){
                    $model->blog_image = NULL;
                  }elseif($model->image === NULL ){
                    //Do nothing since we have a file already, but
                  }else{
                    $strUniqueFilename = 'uploads/blog/'. Yii::$app->security->generateRandomString().".{$model->image->extension}";
                    $model->image->saveAs($strUniqueFilename);
                    $model->blog_image=$strUniqueFilename;
                  }
                  if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id]);
                  }else{
                    //there was an error create some kind of alert, and
                    Yii::app()->user->setFlash('error',"There was an issue saving your blog, try again maybe?");
                    return $this->redirect(['index']);
                  }
              }
            }

            else
            {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
        else
        {
            throw new MethodNotAllowedHttpException(Yii::t('app', 'You are not allowed to access this page.'));
        }
    }

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param  integer $id
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect('admin');
    }

    /**
     * Manage Blogs.
     *
     * @return mixed
     */
    public function actionAdmin()
    {
        /**
         * How many Blogs we want to display per page.
         * @var integer
         */
        $pageSize = 11;

        /**
         * Only admin+ roles can see everything.
         * Editors will be able to see only published Blogs and their own drafts @see: search().
         * @var boolean
         */
        $published = (Yii::$app->user->can('admin')) ? false : true ;

        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $pageSize, $published);

        return $this->render('admin', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer  $id
     * @return Blog The loaded model.
     *
     * @throws NotFoundHttpException if the model cannot be found.
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null)
        {
            return $model;
        }
        else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
