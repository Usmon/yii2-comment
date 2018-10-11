<?php

namespace app\models;

use common\models\User;
use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property int $user_id
 * @property string $content
 * @property string $create_date
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    public function init()
    {
        parent::init();
        $this->create_date = new \yii\db\Expression('NOW()');
        $this->user_id = Yii::$app->user->id;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['content', 'create_date'], 'required'],
            [['content'], 'string'],
            [['create_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Пользователь',
            'content' => 'Комментарий',
            'create_date' => 'Дата',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id'=>'user_id']);
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDatetime($this->create_date);
    }

}
