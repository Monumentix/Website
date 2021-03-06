<?php
namespace frontend\models;

use common\models\User;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $tags
 * @property string $slug
 * @property string $blog_image
 * @property string $summary
 * @property string $content
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 */
class Blog extends ActiveRecord
{
    public $postMonth;
    public $image;
    public $imageDelete;

    const STATUS_DRAFT = 1;
    const STATUS_PUBLISHED = 2;

    /**
     * Declares the name of the database table associated with this AR class.
     *
     * @return string
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * Returns the validation rules for attributes.
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'tags', 'summary', 'slug', 'content', 'status'], 'required'],
            [['user_id', 'status'], 'integer'],
            [['summary', 'content','blog_image', 'tags'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['slug'], 'string', 'max' => 255],
            [['imageDelete'],'boolean'],
            [['image'],'file'],

        ];
    }

    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
              'class' => SluggableBehavior::className(),
              'attribute' => 'title',
              // In case of attribute that contains slug has different name
              // 'slugAttribute' => 'alias',
            ]
        ];
    }

    /**
     * Returns the attribute labels.
     *
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'Author'),
            'title' => Yii::t('app', 'Title'),
            'tags' => Yii::t('app', 'Tags'),
            'summary' => Yii::t('app', 'Summary'),
            'content' => Yii::t('app', 'Content'),
            'status' => Yii::t('app', 'Status'),
            'imageDelete' => Yii::t('app', 'Delete Image'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets the id of the article creator.
     * NOTE: needed for RBAC Author rule.
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->user_id;
    }

    /**
     * Gets the author name from the related User table.
     *
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->user->username;
    }

    /**
     * Returns the article status in nice format.
     *
     * @param  null|integer $status Status integer value if sent to method.
     * @return string               Nicely formatted status.
     */
    public function getStatusName($status = null)
    {
        $status = (empty($status)) ? $this->status : $status ;

        if ($status === self::STATUS_DRAFT)
        {
            return Yii::t('app', 'Draft');
        }
        else
        {
            return Yii::t('app', 'Published');
        }
    }

    /**
     * Returns the array of possible article status values.
     *
     * @return array
     */
    public function getStatusList()
    {
        $statusArray = [
            self::STATUS_DRAFT     => Yii::t('app', 'Draft'),
            self::STATUS_PUBLISHED => Yii::t('app', 'Published'),
        ];

        return $statusArray;
    }



    /**
     * Returns the article category in nice format.
     *
     * @param  null|integer $category Category integer value if sent to method.
     * @return string                 Nicely formatted category.
     */
     /*
    public function getCategoryName($category = null)
    {
        $category = (empty($category)) ? $this->category : $category ;

        if ($category === self::CATEGORY_ECONOMY)
        {
            return Yii::t('app', 'Economy');
        }
        elseif ($category === self::CATEGORY_SOCIETY)
        {
            return Yii::t('app', 'Society');
        }
        else
        {
            return Yii::t('app', 'Sport');
        }
    }
*/

    /**
     * Returns the array of possible article category values.
     *
     * @return array
     */
/*    public function getCategoryList()
    {
        $statusArray = [
            self::CATEGORY_ECONOMY => Yii::t('app', 'Economy'),
            self::CATEGORY_SOCIETY => Yii::t('app', 'Society'),
            self::CATEGORY_SPORT   => Yii::t('app', 'Sport'),
        ];

        return $statusArray;
    }
    */

}
