<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%t_user}}".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $telephone
 * @property string $create_at
 */
class TUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%t_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at'], 'safe'],
            [['user_name'], 'string', 'max' => 24],
            [['telephone'], 'string', 'max' => 11],
            [['telephone'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_name' => Yii::t('app', '用户姓名'),
            'telephone' => Yii::t('app', '手机号'),
            'create_at' => Yii::t('app', '注册时间'),
        ];
    }
}
