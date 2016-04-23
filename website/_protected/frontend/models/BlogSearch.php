<?php
namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use Yii;

use justinvoelker\tagging\TaggingQuery;

/**
 * BlogSearch represents the model behind the search form about `app\models\Blog`.
 */
class BlogSearch extends Blog
{
    /**
     * Returns the validation rules for attributes.
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'tags','summary', 'content'], 'safe'],
        ];
    }

    /**
     * Returns a list of scenarios and the corresponding active attributes.
     *
     * @return array
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array   $params    The search query params.
     * @param integer $pageSize  The number of results to be displayed per page.
     * @param boolean $published Whether or not Blogs have to be published.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $pageSize = 3, $published = false)
    {
        $query = Blog::find();

        // this means that editor is trying to see Blogs
        // we will allow him to see published ones and drafts made by him
        if ($published === true)
        {
            $query->where(['status' => Blog::STATUS_PUBLISHED]);
            $query->orWhere(['user_id' => Yii::$app->user->id]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id' => SORT_DESC]],
            'pagination' => [
                'pageSize' => $pageSize,
            ]
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
              ->andFilterWhere(['like', 'summary', $this->summary])
              ->andFilterWhere(['like', 'tags', $this->tags])
              ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }


    public function getTags(){
      $query = new TaggingQuery;
      $tags = $query
        ->select('tags')
        ->from('blog')
        ->getTags();

        return $tags;
    }

    public function archive($params, $pageSize = 3, $published = false)
    {
        $query = Blog::find();
        $query->select(['DATE_FORMAT(from_unixtime(created_at),"%M") as postMonth','id','slug','user_id']);
        $query->groupBy('postMonth');

        // this means that editor is trying to see Blogs
        // we will allow him to see published ones and drafts made by him
        if ($published === true)
        {
            $query->where(['status' => Blog::STATUS_PUBLISHED]);
            $query->orWhere(['user_id' => Yii::$app->user->id]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['created_at' => SORT_DESC]],
            'pagination' => [
                'pageSize' => $pageSize,
            ]
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }



        return $dataProvider;
    }

}
