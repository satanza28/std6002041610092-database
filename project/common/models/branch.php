<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Branch".
 *
 * @property int $id
 * @property string $name_branch
 */
class branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_branch'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_branch' => 'Name Branch',
        ];
    }
}
